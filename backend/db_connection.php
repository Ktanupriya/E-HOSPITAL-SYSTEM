<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'e_hospital';

// Establish a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);
}












// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'e_hospital';

// $conn = mysqli($host,$user,$pass,$db);

// if ($conn->connect_error) {
//     echo "Failed to connect DB".$conn->connect_error;
// }
// echo "Database connected successfully!";


// if (isset($_POST)['submit']) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];


//     $host = 'localhost';
//     $user = 'root';
//     $pass = '';
//     $dbname = 'e_hospital';

//     $conn = mysqli_connect($host,$user,$pass,$dbname);

//     $sql = "INSERT INTO login(username,password) values ('$username','$password')";
//     mysqli_query($conn,$sql);
// }
?>

