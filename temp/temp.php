<?php 

session_start(); // Start the first session

$_SESSION['first_session_var'] = 'data for first session';

session_write_close(); // Close the first session

session_id('second_session'); // Set a new session ID for the second session
session_start(); // Start the second session

$_SESSION['second_session_var'] = 'data for second session';



// Function to hash and store password
function hashAndStorePassword($userId, $password) {
    global $dbConnection;

    if (!$dbConnection) {
        connectToDatabase(); // Establish database connection if not already connected
    }

    try {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL statement to insert or update the password
        $stmt = $dbConnection->prepare("REPLACE INTO passwords (user_id, password_hash) VALUES (:userId, :hashedPassword)");
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":hashedPassword", $hashedPassword);
        $stmt->execute();

        echo "Password hashed and stored successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

require_once "connectdb.php";

function getUser() {
    $dbConnection = connectdb('user'); // Establish database connection

    try {
        // Prepare and execute SQL statement
        $req = $dbConnection->prepare("SELECT test_id FROM test");
        $req->execute();

        // Fetch all rows
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

<?php
similar_text("Joanne Kquelquechose","Rowling",$percent);
echo $percent;
?>
