<?php
$servername = "localhost";
$port = 3306;

// Monkey server credentials
$username = "group5";
$password = "STUgroup5";
$conn = new mysqli($servername, $username, $password, "group5", 3306);

// Local server credentials
// $username = "root";
// $password = "root";
// $conn = new mysqli($servername, $username, $password, "dbproject", 3306);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>