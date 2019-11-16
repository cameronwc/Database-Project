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

        <form class="ui form" id="universitySearch" action="viewUniversities.php" method="POST">
            <div class="ui search">
                <label>University</label>
                <input class="prompt" type="text" name="q"  placeholder="University of Colorado Colorado Springs">
                <div class="results"></div>
            </div>
            <button class="ui green button" type="submit">Submit</button>
        </form>
        <table class="ui celled table">
            <tbody>

            <?php
                // Form database query
                $q = $connection->real_escape_string($_POST['q']);
                $sql = "SELECT * FROM university WHERE name LIKE '%$q%'";
                
                $res = $conn->query($sql);

                if ($res->num_rows > 0) {
                    // output data of each row
                    while($row = $res->fetch_assoc()) {
                        echo "<tr>
                                <td data-label='Name'>".$row["name"]."</td>
                            </tr>";
                        echo "<script>
                            $('#".$row['name'].$row['lName']."').rating('disable');
                        </script>";
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
