<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];

    $stmt = $conn->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_date, status) VALUES (?, ?, ?, 'scheduled')");
    $stmt->bind_param("iis", $patient_id, $doctor_id, $appointment_date);
    if ($stmt->execute()) {
        echo "Appointment scheduled successfully.";
    } else {
        echo "Failed to schedule appointment.";
    }
}
?>
