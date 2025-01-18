<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_id = $_POST['patient_id'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO billing (patient_id, amount, status) VALUES (?, ?, 'unpaid')");
    $stmt->bind_param("id", $patient_id, $amount);
    if ($stmt->execute()) {
        echo "Billing record added successfully.";
    } else {
        echo "Failed to add billing record.";
    }
}
?>

