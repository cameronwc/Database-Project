<?php
    include("db.php");

    $loser_id=uniqid();
    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $university = $_POST["university"];

    $sql = "INSERT INTO loser (loser_id, fName, lName, university, rating) VALUES ('$loser_id, $firstName', '$lastName', '$university', '1')";
    $res = $conn->query($sql);
    header('Location: /~group5');
?>
