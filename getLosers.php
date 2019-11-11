<h1>TEST PAGE</h1>
<?php
    include("./php/db.php");

    // Form database query
    $sql = "SELECT * FROM loser";
    
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        // Form table column names
        echo "<table><tr><th>Name</th><th>Rating</th><th>University</th></tr>";
    
        // output data of each row
        while($row = $res->fetch_assoc()) {
            echo "<tr><td>".$row["fName"]." ".$row["lName"]."</td><td>".$row["rating"]."</td><td>".$row["university"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>