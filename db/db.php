<?php
// Database connection configuration
$servername = "localhost: 3305";
$username = "root";  // Change as per your MySQL credentials
$password = "";      // Change as per your MySQL credentials
$database = "rockstar_clone";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
