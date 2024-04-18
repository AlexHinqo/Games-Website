<?php
// Database configuration
$host = 'your_database_host'; // EC2 instance private IP or public DNS
$user = 'your_database_user';
$password = 'your_database_password';
$database = 'your_database_name';

// Connect to MySQL database
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
