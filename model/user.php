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
    $dbConnection = connectdb('user');

    try {
        // New user
        $req = $dbConnection->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
        $req->bindParam(':username', $username);
        $req->bindParam(':email', $email);
        
        $req->execute();

        // Get the ID of the newly created user
        $userID = $dbConnection->lastInsertId();

        $hashedPassword = hash_password($password);

        // Prepare and execute SQL statement to insert password
        $req = $dbConnection->prepare("INSERT INTO passwords (user_id, password_hash) VALUES (:user_id, :password)");
        $req->bindParam(':user_id', $userID);
        $req->bindParam(':password', $hashedPassword);

        $registered = $req->execute();
        return [$registered,$userID];

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function verifyUser($username,$password) {
    $dbConnection = connectdb('user');
    
    try {
        // New user
        $req = $dbConnection->prepare("SELECT id, password_hash FROM users JOIN passwords ON users.id = passwords.user_id WHERE username = :username");
        $req->bindParam(':username', $username);
        $req->execute();
        $user = $req->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $hashedPassword = $user['password_hash'];
            if (verifyPassword($password, $hashedPassword)) {
                return true;
            } else {
                error_log("Wrong Password for : ".$username);
                return false;
            }
        } else {
            error_log("User not found : ".$username);
            return false; // User not found
        }

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}