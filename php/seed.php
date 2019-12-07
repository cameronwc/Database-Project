<?php
include("db.php");

if (($handle = fopen("../dataset/university.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;
        if($row !== 1) {
            $sql = "SELECT `name` FROM university where `name`='$data[4]'";

            $res = $conn->query($sql);

            if($res->num_rows == 0) {
                $sql = "INSERT INTO university (`name`) VALUES ('$data[4]')";
                $res = $conn->query($sql);
            }            
        }
    }
    fclose($handle);
}
