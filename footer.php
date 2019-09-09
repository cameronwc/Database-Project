    <footer>
        <div class="container">
            <div class="horizontal-flex">
                <div class="item">
                    <div class="logo-flex">
                        <?php echo file_get_contents("assets/logo.svg") ?>
                        <h3>
                            Design<br />Resources
                        </h3>
                    </div>
                    <p>
                        Design Resources is a service that allows web developers to find the best resources for their web sites. Web developers can also add and save their favorite resources to their personal lists.
                    </p>
                </div>

                <div class="item">
                    <p>Navigation</p>
                    <ul>
                    <li>
                    <a href="/">Home</a></li>
                    <?php
                        if (isset($_COOKIE['email'])) {
                            echo '<li><a href="/logout.php">Log Out</a></li>';
                        } else {
                            echo '<li><a href="/login.php">Log In</a></li>';
                            echo '<li><a href="/signup.php">Sign Up</a></li>';
                        }

                    ?>
                    <li><a href="/additem.php">Add Item</a></li>
                    <li><a href="/myitems.php">My Items</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>