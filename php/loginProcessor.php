<?php
    include("db.php");

    $email = $_POST["email"];
    $user_password = $_POST["password"];

    $sql = "SELECT password FROM user WHERE email='$email'";

    $res = $conn->query($sql);
    $value = $res->fetch_assoc();
    $password_hash = $value["password"];
    if(password_verify($user_password, $password_hash)) {
        setcookie("email", $email, time() + (86400), "/");
        header('Location: /~group5');
    } else {
        header('Location: /~group5/login.html?login=failed');
    }
?>