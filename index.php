<?php
include("header.php");
?>

<div class="hero">
    <h1>Free Web Development Resources</h1>
    <p>Browse through our library of free design resources<br />and add your own to help your fellow web developers</p>
    <?php
        if(isset($_COOKIE["email"])){
            echo "<h2>Hello ". $_COOKIE["email"]. "</h2>"; 
        }
    ?>
    <div class="horizontal-flex">
        <a href="#resources" class="btn">
            Browse Resources
        </a>
        <a href="additem.php" class="btn">
            Add Item
        </a>
    </div>
    <?php echo file_get_contents("assets/hero.svg") ?>
</div>

<?php
include("resources.php");
include("footer.php");
?>