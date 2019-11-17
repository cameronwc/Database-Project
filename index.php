<?php include("./partials/header.html") ?>
<!-- Page Contents -->
<div class="pusher">
    <div id="header" class="ui inverted vertical masthead center aligned segment">
        <div class="overlay">
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
                <?php
                include("./php/db.php");

                if (isset($_COOKIE["email"])) {
                    // Form database query
                    $userEmail = $_COOKIE["email"];
                    $sql = "SELECT fName FROM user WHERE email=\"$userEmail\"";
                    // echo $sql;
                    $res = $conn->query($sql);
                    $row = $res->fetch_assoc();
                    echo "<h1> Hello " . $row["fName"] . "!</h1>";
                    echo '
                        <div id="primaryBox">
                            <h1 class="ui inverted header">
                                Rate The Losers!
                            </h1>
                            <h2>
                                Click below to rate the sh*t teammates you\'ve done projects with!
                            </h2>
                            <div onclick="openForm()" class="ui huge primary button">Rate a loser <i class="right arrow icon"></i></div>
                        </div>';
                    $conn->close();
                } else {
                    echo '
		    <div id="primaryBox">
                        <h1 class="ui inverted header">
                            Rate The Losers!
                        </h1>
                        <h2>
			    Create an account and login to get started and start rating all those shi*ty teammates you\'ve had!
			</h2>
                    </div>';
                }
                ?>
                <form class="ui form" id="rateForm" action="php/submitLoser.php" method="POST">
                    <h1 class="ui inverted header">
                        Rate a loser
                    </h1>
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="fName" placeholder="John">
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="lName" placeholder="Doe">
                    </div>
                    <div class="ui search">
                        <label>University</label>
                        <input class="prompt" type="text" name="university" placeholder="University of Colorado Colorado Springs">
                        <div class="results"></div>
                    </div>
                    <div id="initialRating" class="ui star rating" data-max-rating="5" data-rating="1"></div>
                    <br>
                    <button class="ui green button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3><a href="getLosers.php">View the Losers</a></h3>
                    <p>View the lousy teammates in the U.S.</p>
                </div>
                <div class="column">
                    <h3><a href="viewUniversities.php">View Universities</a></h3>
                    <p>
                        View universities around the U.S.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include("./partials/footer.html") ?>