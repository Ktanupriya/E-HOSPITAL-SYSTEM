<?php
$host = "sql213.infinityfree.com";  // Example from InfinityFree
$username = "if0_38151079";
$password = "Ktanu2024";
$dbname = "if0_38151079_XXX";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
