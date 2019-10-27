<?php
include("db.php");

if (($handle = fopen("../dataset/university.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;
        if($row !== 1) {
            $sql = "INSERT INTO university (`name`) VALUES ('$data[4]')";
            $res = $conn->query($sql);
            if ($res === TRUE) {
                header('Location: /~group5/');
                setcookie("email", $email, time() + 86400, "/");
            }
        }
    }
    fclose($handle);
}
