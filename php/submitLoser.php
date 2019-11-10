<?php
    include("db.php");

    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $university = $_POST["university"];

    $sql = "INSERT INTO loser (fName, lName, university, rating) VALUES ('$firstName', '$lastName', '$university', '1')";
    $res = $conn->query($sql);
    header('Location: /~group5');
?>
