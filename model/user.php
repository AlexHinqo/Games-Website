<?php

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