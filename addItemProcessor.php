<?php
include("db.php");
$image = $_GET["image"];
$title = $_GET["title"];
$desc = $_GET["description"];
$url = $_GET["URL"];
$type = $_GET["type"];
$user = $_COOKIE["email"];

$sql = "INSERT INTO resources (Image, Title, Description, URL, User, `Type`) VALUES ('$image', '$title', '$desc', '$url', '$user', '$type')";


if ($conn->query($sql) === TRUE) {
    header( 'Location: http://localhost:8080/Final_Project/template.php' ) ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>