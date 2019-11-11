<?php 
    include("./php/db.php");
    include("./partials/header.html");
?>

<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <h3><a href="/~group5">Rate The Losers</a></h3>

                <div class="right item">
                    <?php
                    if (isset($_COOKIE["email"])) {
                        echo '<a href="php/logout.php" class="ui inverted button">Log out</a>';
                    } else {
                        echo '<a href="login.html" class="ui inverted button">Log in</a>';
                        echo '<a href="register.html" class="ui inverted button">Sign Up</a>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="ui container">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>University</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    // Form database query
                    $sql = "SELECT * FROM loser";
                    
                    $res = $conn->query($sql);

                    if ($res->num_rows > 0) {
                        // output data of each row
                        while($row = $res->fetch_assoc()) {
                            echo "<tr>
                                    <td data-label='Name'>".$row["fName"]." ".$row["lName"]."</td>
                                    <td data-label='Rating'>".$row["rating"]."</td>
                                    <td data-label='University'>".$row["university"]."</td>
                                </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div> 
<?php include("./partials/footer.html"); ?>
