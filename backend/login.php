<?php
session_start();

// Database connection
$host = "localhost";
$dbUsername = "root"; // Default XAMPP username
$dbPassword = ""; // Default XAMPP password
$dbName = "e_hospital";
// $host = "sql213.infinityfree.com";  
// $username = "if0_38151079";
// $password = "Ktanu2024";
// $dbname = "if0_38151079_XXX";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// $conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from database
    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userId, $hashedPassword);

    if ($stmt->fetch()) {
        if (password_verify($password, $hashedPassword)) {
            // Start session and redirect to home page
            $_SESSION['user'] = $username; // Set session variable
            header("Location: ../index.html"); // Redirect to the home page
            exit();
        } else {
            $_SESSION['error'] = "Invalid username or password. Please try again.";
            header("Location: ../login.html");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid username or password. Please try again.";
        header("Location: ../login.html");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
