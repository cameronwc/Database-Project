<?php include("header.php"); ?>
<div class="container">
    <h2>Log In</h2>
    <form action="loginProcessor.php" class="logIn form" id="logIn" method="POST">

        <?php
            if(isset($_COOKIE['email'])) {
                echo "<p class='success'>You are already logged in as ".$_COOKIE['email']."</p>";
                echo "<a href='/logout.php' class='btn'>Log Out</a>";
            } else {
                if($_GET['login']) {
                    echo '
                    <p class="error" id="error_message" style="visibility: visible;">
                        Your username or password was incorrect.
                    </p>';
                }

                echo '
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="john.doe@example.com" required />
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" required />
                <button class="btn">Log In</button>';
            }
        ?>
    </form>
</div>
<?php include("footer.php"); ?>