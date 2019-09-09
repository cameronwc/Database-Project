<?php

    $servername = "localhost";
    $username = "root";
    $password = "cooper";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, "project", 3306);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $user_password = $_POST["password"];

    $sql = "SELECT password FROM users WHERE email='$email'";

    $res = $conn->query($sql);
    $value = $res->fetch_assoc();
    $password_hash = $value["password"];
    if(password_verify($user_password, $password_hash)) {
        setcookie("email", $email, time() + (86400 * 30), "/");
        header('Location: /');
    } else {
        header('Location: /login.php?login=failed');
    }
?>