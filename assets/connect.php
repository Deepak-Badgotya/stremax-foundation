<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "stremax-foundation";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

/* $submission_datetime = date('Y-m-d H:i:s');
$sql = "INSERT INTO students (submission_time)"; */
} 
?>