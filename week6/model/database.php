<?php

$dsn = "mysql:host=localhost; dbname=assignment_tracker";
$username = "root";
$password = "password";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Database connection failed");
}