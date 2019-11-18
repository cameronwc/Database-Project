<?php
    include("db.php");

    $pass = $_POST['password'];
    $email = $_POST['email'];
    $token = $_POST['token'];

    $password_hash = password_hash($pass, PASSWORD_BCRYPT);
    $sql = "UPDATE user SET `password` = '$password_hash' WHERE email = '$email'";
    $res = $conn->query($sql);
    header('Location: /~group5/');
    setcookie("email", $email, time() + 86400, "/");
?>