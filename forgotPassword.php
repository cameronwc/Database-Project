<?php include("./partials/header.html") ?>
<div class="ui inverted vertical masthead center aligned segment">
    <h1>Forgot your password?</h1>
    <p>Enter your email to reset your password.</p>
    <div class="ui text container">
        <form action="./php/forgotPasswordProcessor.php" method="POST" class="ui form">
            <div class="field">
                <input type="email" name="Email" placeholder="john.doe@gmail.com">
            </div>
            <button style="width: 100%;" class="ui green button">Reset Password</button>
        </form>
    </div>
</div>
</div>