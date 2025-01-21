<?php
session_start();

$host = "sql213.infinityfree.com";  // Example from InfinityFree
$username = "if0_38151079";
$password = "Ktanu2024";
$dbname = "if0_38151079_XXX";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

error_log("Handling form submission");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $email = $_POST['email'];
    $role = $_POST['role']; // Ensure this is handled correctly

    error_log("Checking if username already exists: $username");

    $checkStmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        error_log("Username already exists: $username");
        echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href = '../register.html';</script>";
        $checkStmt->close();
        exit();
    }

    $checkStmt->close();

    error_log("Inserting new user into the database");

    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $role);

    if ($stmt->execute()) {
        error_log("Registration successful for user: $username");
        echo "<script>alert('Registration successful!'); window.location.href = '../login.html';</script>";
    } else {
        error_log("Error inserting user: " . $stmt->error); // Log the error
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
