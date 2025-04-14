<?php
// Show errors for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $data = "Name: $name\nEmail: $email\nMessage: $message\n---\n";

    $file = '/var/www/html/submissions.txt';

    // Try writing to the file
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Thank you! Your message was saved.";
    } else {
        echo "Error: Could not write to file.";
    }
} else {
    echo "Invalid request.";
}
?>
