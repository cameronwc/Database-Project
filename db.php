<?php
$servername = "localhost";
$username = "root";
$password = "cooper";
$port = 3306;

$conn = new mysqli($servername, $username, $password, "project", 3306);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>