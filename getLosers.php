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

        <form class="ui form" id="loserSearch" action="getLosers.php" method="POST">
            <div class="ui text container">
                <div class="ui search">
                    <label>University</label>
                    <input type="text" id="searchBar" name="university"
                        placeholder="University of Colorado Colorado Springs">
                </div>
                <div class="ui search">
                    <label>Student Name</label>
                    <input type="text" id="searchBar" name="name" placeholder="John Doe">
                </div>
                <div class="ui labeled icon top right pointing dropdown button">
                    <input type="hidden" name="ratingFilter">
                    <i class="filter icon"></i>
                    <span class="text">Filter Posts</span>
                    <div class="menu">
                        <div class="header">
                            <i class="tags icon"></i>
                            Filter by rating
                        </div>
                        <div class="item" data-value="1">
                            <i class="star icon yellow"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                        </div>
                        <div class="item" data-value="2">
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                        </div>
                        <div class="item" data-value="3">
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                        </div>
                        <div class="item" data-value="4">
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon"></i>
                        </div>
                        <div class="item" data-value="5">
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                            <i class="star icon yellow"></i>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <button class="ui green button" type="submit">Submit</button>
            </div>
        </form>

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
                    $name = $conn->real_escape_string($_POST['name']);
                    if (isset($_GET['university'])) {
                        $university = $conn->real_escape_string($_GET['university']);
                    } else {
                        $university = $conn->real_escape_string($_POST['university']);
                    }

                    if (isset($_POST['ratingFilter']) && !empty($_POST['ratingFilter'])) {
                        $filter = $conn->real_escape_string($_POST['ratingFilter']);
                        $sql = "SELECT * FROM loser WHERE (fName LIKE '%$name%' OR lName LIKE '%$name%') AND university LIKE '%$university%' AND rating LIKE %$ratingFilter%";
                    } else {
                        $sql = "SELECT * FROM loser WHERE (fName LIKE '%$name%' OR lName LIKE '%$name%') AND university LIKE '%$university%'";
                    }

                    $res = $conn->query($sql);

                    if ($res->num_rows > 0) {
                        // output data of each row
                        while ($row = $res->fetch_assoc()) {
                            echo "<tr>
                                        <td data-label='Name'>" . $row["fName"] . " " . $row["lName"] . "</td>
                                        <td data-label='Rating'><div id='" . $row['fName'] . $row['lName'] . "' class='ui star rating' data-rating='1' data-max-rating='5'></div></td>
                                        <td data-label='University'>" . $row["university"] . "</td>
                                    </tr>";
                            echo "<script>
                                    $('#" . $row['fName'] . $row['lName'] . "').rating('disable');
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

    <script>
    $('.ui.dropdown').dropdown('get value');
    </script>
    <?php include("./partials/footer.html"); ?>