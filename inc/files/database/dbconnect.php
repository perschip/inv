<?php

$host = 'localhost';
$db = 'inv';
$db_user = 'manager';
$db_password = 'manager';

// Create Connection
$conn = new mysqli($host, $db_user, $db_password, $db);

// Check Connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>