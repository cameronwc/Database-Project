<?php include("library.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Resources</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#f0544f">
    <meta name="theme-color" content="#f0544f">
    <link rel="stylesheet" href="assets/stylesheet.css">
    <script src="assets/script.js"></script>
</head>

<body>
    <nav class="navbar">
        <a href="/">
            <div class="logo-flex">
                <?php echo file_get_contents("assets/logo.svg") ?>
                <h3>
                    Design<br />Resources
                </h3>
            </div>
        </a>
        <form class="search-form" action="searchResults.php" method="POST">
            <input class="search-bar" name="query" type="text" placeholder="Search a resource">
            <button class="search-button"><img class="search-icon" src="assets/search.png" alt="search icon"></button>
        </form>
        <ul class="nav-items">
            <li><a href="/">Home</a></li>
            <?php
                if (isset($_COOKIE['email'])) {
                    echo "<li><a href='/logout.php'>Log Out</a></li>";
                } else {
                    echo "<li><a href='/login.php'>Log In</a></li>";
                    echo "<li><a href='/signup.php'>Sign Up</a></li>";
                }

            ?>
            <li><a href="/additem.php">Add Item</a></li>
            <li><a href="/myitems.php" class="btn">My Items</a></li>
        </ul>
    </nav>