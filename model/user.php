<?php

require_once "connectdb.php";


function hash_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($enteredPassword, $hashedPassword) {
    // Verify the password hash
    return password_verify($enteredPassword, $hashedPassword);
}


function createUser($email, $password, $username) {
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
        $req->bindParam(':username', $username);
        $req->bindParam(':email', $email);
        
        $req->execute();
        $userID = $dbConnection->lastInsertId();

        $hashedPassword = hash_password($password);

        $req = $dbConnection->prepare("INSERT INTO passwords (user_id, password_hash) VALUES (:user_id, :password)");
        $req->bindParam(':user_id', $userID);
        $req->bindParam(':password', $hashedPassword);

        $registered = $req->execute();
        return [$registered,$userID];

    } catch(PDOException $e) {
        throw $e;
        return false;
    }
}

function verifyUser($mail,$password) {
    $dbConnection = connectdb();
    
    try {
        $req = $dbConnection->prepare("SELECT id, email, password_hash, username FROM users JOIN passwords ON users.id = passwords.user_id WHERE email = :email");
        $req->bindParam(':email', $mail);
        $req->execute();
        $user = $req->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $hashedPassword = $user['password_hash'];
            if (verifyPassword($password, $hashedPassword)) {
                return true;
            } else {
                error_log("Wrong Password for : ".$user['username']);
                return false;
            }
        } else {
            error_log("User not found : ".$mail);
            return false; // User not found
        }

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function getUserByMail($mail){
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("SELECT id, email, username, is_admin FROM users JOIN passwords ON users.id = passwords.user_id WHERE email = :email");
        $req->bindParam(':email', $mail);
        $req->execute();
        $user = $req->fetch(PDO::FETCH_ASSOC);
            return $user;

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


function VerifyLogIn() {
    if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();}

    if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {return true;}
    else {return false;}
    session_write_close();
}

?>