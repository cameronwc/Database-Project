<div id="resources" class="resources">
    <?php

    $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Font'";
    $result = $conn->query($sql);
    displayResult($result, 'Fonts');

    $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Illustration'";
    $result = $conn->query($sql);
    displayResult($result, 'Illustrations');

    $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Icon'";
    $result = $conn->query($sql);
    displayResult($result, 'Icons');

    $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Image'";
    $result = $conn->query($sql);
    displayResult($result, 'Images');

    $sql = "SELECT Image, Title, Description, URL, `Type` FROM resources WHERE `Type`='Color'";
    $result = $conn->query($sql);
    displayResult($result, 'Colors');

    ?>
</div>
