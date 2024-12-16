<?php
// Database configuration
$dbHost = 'localhost'; // Hostname
$dbUsername = 'root'; // Database username
$dbPassword = 'password'; // Database password
$dbName = 'contact_submissions'; // Database name

// Create a database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
