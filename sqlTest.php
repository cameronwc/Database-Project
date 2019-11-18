<?php 
    include("./php/db.php");
?>

<?php
    // Form database query
    $sql = "SELECT * FROM university WHERE name LIKE '%colorado%'";
    
    echo "SQL Query: ";
    echo $sql;
    echo "<br>";

    $res = $conn->query($sql) or die("Bad Query: $sql");

    // The data exists in the database
    if ($res->num_rows > 0) {
        // output data of each row
        echo "The data exists in the database:";
        echo "<br>";
        echo "<br>";

        // get the row from the sql query
        // you could use mysqli_fetch_array if you want
        // $row = mysqli_fetch_assoc($res);
        
        // print_r shows the row object, ex. Array
        // print_r($row);

        // print the stuff you want from the object
        while($row = $res->fetch_assoc()) {
            // print_r($row);
            echo "{$row["name"]}<br>";
        }


    } else {
        echo "That data is not in the database.";
    }
?>



