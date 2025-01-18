<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        switch ($user['role']) {
            case 'admin': header("Location: ../dashboard/admin-dashboard.html"); break;
            case 'doctor': header("Location: ../dashboard/doctor-dashboard.html"); break;
            case 'patient': header("Location: ../dashboard/patient-dashboard.html"); break;
        }
    } else {
        echo "Invalid credentials!";
    }
}
?>
