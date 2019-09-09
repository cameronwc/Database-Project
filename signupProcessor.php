<?php

    $include("db.php");

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (first_name, last_name, email, `password`) VALUES ('$first_name', '$last_name', '$email', '$password_hash')";
    $res = $conn->query($sql);
    if ($res === TRUE) {
        header('Location: /');
        setcookie("email", $email, time() + (86400 * 30), "/");
    } else {
        $error = $conn->error;
        if(strpos($error, 'Duplicate') !== false) {
            header("Location: /signup.php?first_name=$first_name&last_name=$last_name&email=$email&error=dup");
        } else {
            header("Location: /signup.php?first_name=$first_name&last_name=$last_name&email=$email&error=null");
        }
    }
?>