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

        <div class="ui text container">
            <form class="search-custom ui form" id="universitySearch" action="viewUniversities.php" method="POST">
                <label for="">University</label>
                <div class="ui search field">
                    <input type="text" id="searchBar" name="q" placeholder="University of Colorado Colorado Springs">
                    <div class="results"></div>
                </div>
                <button class="ui large green button" type="submit">Search</button>
            </form>
        </div>
        <div class="ui text container">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>University Name</th>
                        <th>Number of Losers</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // Form database query
                    $q = $conn->real_escape_string($_POST['q']);
                    $sql = "SELECT COALESCE(COUNT(l.fName), 0) AS 'count', u.name AS 'name' FROM university u LEFT JOIN loser l ON u.name = l.university WHERE name LIKE '%$q%' GROUP BY u.name ORDER BY u.name";

                    $res = $conn->query($sql);

                    if ($res->num_rows > 0) {
                        // output data of each row
                        while ($row = $res->fetch_assoc()) {
                            echo "<tr>
                                    <td class='click' data-label='Name'><a href='getLosers.php?university=" . urlencode($row["name"]) . "'>" . $row["name"] . "</td>
                                    <td data-label='LoserCount'>" . $row["count"] . "</td>
                                </tr>";
                            echo "<script>
                                $('#" . $row['name'] . $row['lName'] . "').rating('disable');
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
</div>
<?php include("./partials/footer.html"); ?>