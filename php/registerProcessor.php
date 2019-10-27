<?php
    include("db.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (fName, lName, email, `password`) VALUES ('$first_name', '$last_name', '$email', '$password_hash')";
    $res = $conn->query($sql);
    print_r($conn->error);
    if ($res === TRUE) {
        header('Location: /~group5/');
        setcookie("email", $email, time() + 86400, "/");
    } else {
    $error = $conn->error;
    if(strpos($error, 'Duplicate') !== false) {
        header("Location: /~group5/register.php?email=$email&error=dup");
    } else {
        header("Location: /~group5/register.php?email=$email&error=null");
    }
}
?>