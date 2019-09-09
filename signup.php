<?php include("header.php"); ?>
<div class="container">
    <h2>Sign Up</h2>
    <form action="signupProcessor.php" class="signUp form" id="signUp" method="POST">
        <p class="error" id="error_message" <?php if(isset($_GET['error'])){ echo 'style="visibility: visible;"';} ?> >
            <?php 
                if ($_GET['error'] == 'dup') {
                    echo 'That email is currently in use.';
                } elseif ($_GET['error'] == 'null') {
                    echo 'An unkown error occured.';
                } 
            ?>
        </p>
        <label for="first_name">First Name</label>
        <input id="first_name" name="first_name" type="text" placeholder="John" value="<?php echo $_GET["first_name"] ?>" required />
        
        <label for="last_name">Last Name</label>
        <input id="last_name" name="last_name" type="text" placeholder="Doe" value="<?php echo $_GET["last_name"] ?>" required />
        
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="john.doe@example.com" value="<?php echo $_GET["email"] ?>" required />
        
        <label for="user_password">Password</label>
        <input onchange="clearError()" id="user_password" type="password" name="password" placeholder="Password" required />
        
        <label for="confirm_password">Confirm Password</label>
        <input onchange="clearError()" id="confirm_password" type="password" name="confirm_password" placeholder="Confirm Password" required />
        
        <a onclick="submitSignupForm()" class="btn">Sign Up</a>
    </form>
</div>

<script>
    function submitSignupForm() {
        const password = document.getElementById("user_password").value;
        const confirm_pass = document.getElementById("confirm_password").value;
        if(password != confirm_pass || password == null || password == ""){
            document.getElementById("error_message").innerHTML = "Your passwords don\'t match or you didn\'t provide a password."
            document.getElementById("error_message").style.visibility = "visible";
        } else {
            document.getElementById("signUp").submit();
        }
    }

    function clearError() {
        document.getElementById("error_message").innerHTML = "";
        document.getElementById("error_message").style.visibility = "hidden";
    }
</script>
<?php include("footer.php"); ?>