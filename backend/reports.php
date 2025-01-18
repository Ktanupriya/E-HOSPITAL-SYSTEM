<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_id = $_POST['patient_id'];
    $report_details = $_POST['report_details'];

    $stmt = $conn->prepare("INSERT INTO reports (patient_id, report_details) VALUES (?, ?)");
    $stmt->bind_param("is", $patient_id, $report_details);
    if ($stmt->execute()) {
        echo "Report generated successfully.";
    } else {
        echo "Failed to generate report.";
    }
}
?>

