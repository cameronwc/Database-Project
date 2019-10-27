<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rate a loser</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
</head>

<body>

    <!-- Following Menu -->
    <div class="ui large top fixed hidden menu">
        <div class="ui container">
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            <div class="right menu">
                <div class="item">
                    <a href="login.html" class="ui button">Log in</a>
                </div>
                <div class="item">
                    <a href="register.html" class="ui primary button">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <a href="login.html" class="item">Login</a>
        <a href="register.html" class="item">Signup</a>
    </div>


    <!-- Page Contents -->
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
                <?php
                if (isset($_COOKIE["email"])) {
                    echo "<h1> Hello! " . $_COOKIE["email"] . "</h1>";
                }
                ?>
                <div id="primaryBox">
                    <h1 class="ui inverted header">
                        Group 5
                    </h1>
                    <h2>
                        Rate The Losers!
                    </h2>
                    <div onclick="openForm()" class="ui huge primary button">Rate a loser <i class="right arrow icon"></i></div>
                </div>

                <form class="ui form" id="rateForm">
                    <h1 class="ui inverted header">
                        Rate a loser
                    </h1>
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="first-name" placeholder="John">
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="last-name" placeholder="Doe">
                    </div>
                    <div class="ui search">
                        <label>University</label>
                        <input class="prompt" type="text" placeholder="University of Colorado Colorado Springs">
                        <div class="results"></div>
                    </div>
                    <div class="ui star rating"></div>
                    <br>
                    <button class="ui green button" type="submit">Submit</button>
                </form>
            </div>

        </div>

        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>View Groups</h3>
                        <p>View university groups around the U.S.</p>
                    </div>
                    <div class="column">
                        <h3>View Universities</h3>
                        <p>
                            View universities around the U.S.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">About</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Sitemap</a>
                            <a href="#" class="item">Contact Us</a>
                            <a href="#" class="item">Religious Ceremonies</a>
                            <a href="#" class="item">Gazebo Plans</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Services</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Banana Pre-Order</a>
                            <a href="#" class="item">DNA FAQ</a>
                            <a href="#" class="item">How To Access</a>
                            <a href="#" class="item">Favorite X-Men</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./assets/js/script.js"></script>
</html>