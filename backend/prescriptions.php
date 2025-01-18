<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $prescription_text = $_POST['prescription_text'];

    $stmt = $conn->prepare("INSERT INTO prescriptions (patient_id, doctor_id, prescription_text) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $patient_id, $doctor_id, $prescription_text);
    if ($stmt->execute()) {
        echo "Prescription added successfully.";
    } else {
        echo "Failed to add prescription.";
    }
}
?>

