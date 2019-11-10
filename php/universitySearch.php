<?php
include("db.php");

$university = $_GET["name"];

$sql = "SELECT name FROM university WHERE name LIKE '%$university%'";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    $i = 0;
    $universityJson = array();
    while ($row = $res->fetch_assoc()) {
        $universityJson['results'][$i]['title'] = $row["name"];
        $i++;
    }
    echo json_encode($universityJson);
}

?>