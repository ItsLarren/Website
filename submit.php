<?php
require_once 'configure.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Assuming you have established a database connection

try {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Logging statements
    error_log('Form data retrieved: Name - ' . $name . ', Email - ' . $email . ', Subject - ' . $subject . ', Message - ' . $message);

    // Prepare the insert statement
    $stmt = $connection->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    $stmt->execute();

    // Logging statement
    error_log('Data inserted into the database.');

    // Close the statement and database connection
    $stmt->close();
    $connection->close();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    error_log('Error: ' . $e->getMessage());
}
?>

