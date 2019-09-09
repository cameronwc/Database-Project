<?php    
    include("db.php");
    function createItem($image, $title, $desc, $URL){
        echo '<div class="item">';
        echo '<div>';
        echo '<img src="' . $image . '" alt="">';
        echo '<h5>' . $title . '</h5>';
        echo '<p>' . $desc . '</p>';
        echo '</div>';
        echo '<div class="button-wrapper">';
        echo '<a href="' . $URL . '" class="btn">Visit Resource</a>';
        echo '</div>';
        echo '</div>';
    }
    
    function displayResult($res, $type)
    {
        if ($res->num_rows > 0) {
            echo "<h4>".$type."</h4>";
            echo '<div class="horizontal-flex">';
            while ($row = $res->fetch_assoc()) {
                $image = $row["Image"];
                $title = $row["Title"];
                $desc = $row["Description"];
                $URL = $row["URL"];
                createItem($image, $title, $desc, $URL);
            }
            echo '</div>';
        }
    }

?>