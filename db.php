<?php
$dsn = 'mysql:host=localhost;dbname=futebol_crud';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
