<?php include("header.php"); ?>
<div class="container">    
    <div id="myItems" class="resources form">
        <h2>My Items</h2>
    
    <?php    
        if (!isset($_COOKIE['email'])) {
            echo '<p>Please login before viewing your items.</p>';
            echo '<a href="/login.php" class="btn">Log In</a>';
        } else {
            $email = $_COOKIE['email'];
    
            $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Font' AND `user`='$email'";
            $result = $conn->query($sql);
            displayResult($result, 'Fonts');
    
            $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Illustration' AND `user`='$email'";
            $result = $conn->query($sql);
            displayResult($result, 'Illustrations');
    
            $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Icon' AND `user`='$email'";
            $result = $conn->query($sql);
            displayResult($result, 'Icons');
    
            $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Image' AND `user`='$email'";
            $result = $conn->query($sql);
            displayResult($result, 'Images');
    
            $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Color' AND `user`='$email'";
            $result = $conn->query($sql);
            displayResult($result, 'Colors');
        }
    ?>

    </div>
</div>
<?php include("footer.php"); ?>