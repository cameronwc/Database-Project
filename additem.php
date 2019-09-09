<?php include("header.php"); ?>
<div class="container">

    <form action="addItemProcessor.php" class="form" id="resource-form">

    <h2>Add item</h2>
    <?php
        if (!isset($_COOKIE['email'])) {
            echo '<p>Please login before adding an item</p>';
            echo '<a href="/login.php" class="btn">Log In</a>';
        } else {
            echo '
            <label for="image">Image URL</label>
            <input id="image" name="image" type="text" placeholder="https://imageurl.com/image" required />
            <label for="title">Title</label>
            <input id="title" name="title" type="text" placeholder="My awesome resource" required />
            <label for="description">Description</label>
            <input id="description" name="description" type="text" placeholder="Description" required />
            <label for="URL">URL to resource</label>
            <input id="URL" type="text" name="URL" placeholder="https://google.com" required />
            <label for="type">Type of Resource</label>
            <select name="type" id="type">
                <option value="Font">Font</option>
                <option value="Illustration">Illustration</option>
                <option value="Icon">Icon</option>
                <option value="Image">Image</option>
                <option value="Color">Color</option>
            </select>
            <button class="btn">Submit</button>
            ';
        }
    ?>
    </form>
</div>
<?php include("footer.php"); ?>