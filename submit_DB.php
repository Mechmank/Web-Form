# To save a data in Maria DB

<?php
// Show errors for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // DB config
    $host = 'localhost';
    $db = 'webform';
    $user = 'root';
    $pass = 'YOUR_ROOT_PASSWORD'; // <-- replace this
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $stmt = $pdo->prepare("INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);

        echo "Submission saved to database!";
    } catch (PDOException $e) {
        echo "DB Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
