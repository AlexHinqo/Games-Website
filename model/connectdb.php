<?php

function connectdb($usertype) {
    $host = 'localhost';
    $dbname = 'philia';
    $username = $usertype;
    $password = ($usertype == 'user') ? 'user' : 'admin';

    try {
        $dbConnection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
}