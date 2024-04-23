<?php

function connectdb() {
    $host = 'localhost';
    $dbname = 'philia';
    $username = 'userdb';
    $password = 'userdb';

    try {
        $dbConnection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
}