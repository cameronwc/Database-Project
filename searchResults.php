<?php
    include('header.php');
    $query = $_POST['query'];
    $sql = "SELECT Image, Title, Description, URL, `Type` 
            FROM resources 
            WHERE CONCAT_WS('', Title, Description, URL, `Type`) LIKE '%$query%'";

    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        echo '<div id="resources" class="resources">';
        displayResult($result, 'Search Results');
        echo '</div>';
    } else {
        echo '<p>No results found. Please try a different query.</p>';
    }

    include('footer.php');
?>