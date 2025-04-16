<?php
// Show errors for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // 1. Save to database
    $host = 'localhost';
    $db   = 'webform';
    $user = 'root';
    $pass = 'YOUR_DB_PASSWORD'; // <-- replace with your actual DB password
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $stmt = $pdo->prepare("INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        exit;
    }

    // 2. Send email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your.email@gmail.com';      // <-- your Gmail
        $mail->Password   = 'your-app-password';         // <-- Gmail app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('your.email@gmail.com', 'Web Form');
        $mail->addAddress('your.email@gmail.com'); // <-- send to yourself or another

        $mail->Subject = 'New Form Submission';
        $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        echo 'Form submitted. DB saved ✅, email sent ✅';
    } catch (Exception $e) {
        echo "Form submitted. DB saved ✅, but email failed ❌: {$mail->ErrorInfo}";
    }
}
?>
