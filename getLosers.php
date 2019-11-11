<h1>TEST PAGE</h1>
<?php
    // Including db.php or php/db.php doesn't work on my machine
    // Must start fresh for connection to database to work

    // Works for both UCCS and local
    $servername = "localhost";
    $port = 3306;

    // UCCS server credentials
    // $username = "group5";
    // $password = "STUgroup5";
    
    // Local server credentials
    $username = "root";
    $password = "root";

    // local connection
    $mysqli = new mysqli($servername, $username, $password, "dbproject", $port);

    // UCCS connection
    // $mysqli = new mysqli($servername, $username, $password, "group5", $port);

    // Check database connection
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    // Form database query
    $sql = "SELECT * FROM loser";
    
    // Submit query $sql, to the connected database $mysqli
    $result = mysqli_query($mysqli, $sql) or die("Bad Query: $sql");
    
    // print_r($result); // Debugging purposes.

    if ($result->num_rows > 0) {
        // Form table column names
        echo "<table><tr><th>Name</th><th>Rating</th><th>University</th></tr>";
    
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["fName"]." ".$row["lName"]."</td><td>".$row["rating"]."</td><td>".$row["university"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $mysqli->close();

    // Killing this line breaks the page, leave it in.
    $conn->close();
    
    header('Location: /~group5');
?>