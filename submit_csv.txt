# To save a output in CSV file

<?php
// Show errors while debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean input data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // File path
    $file = '/var/www/html/submissions.csv';

    // Open the file in append mode
    $fp = fopen($file, 'a');

    if ($fp) {
        // If file is empty, add headers first
        if (filesize($file) == 0) {
            fputcsv($fp, ['Name', 'Email', 'Message', 'Timestamp']);
        }

        // Save the data
        fputcsv($fp, [$name, $email, $message, date("Y-m-d H:i:s")]);

        fclose($fp);
        echo "Thanks! Your message was saved in CSV format.";
    } else {
        echo "Error: Could not open file for writing.";
    }
} else {
    echo "Invalid request.";
}
?>
