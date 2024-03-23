<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server name if it's different
$username = "root";
$password = "";
$database = "carsystemdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
