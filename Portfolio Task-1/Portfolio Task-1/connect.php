<?php
// Database connection

$host = "localhost";
$user = "root";
$password = "";
$database = "portfolio";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Uncomment the line below only for testing
// echo "Database Connected Successfully!";
?>