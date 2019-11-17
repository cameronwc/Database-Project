<?php

include("db.php");

$email_token = $_GET['token'];
$email = $_GET['email'];

$sql = "SELECT token, `timestamp` FROM password_reset WHERE email='$email' AND token='$email_token'";

$res = $conn->query($sql);
$value = $res->fetch_assoc();
$db_token = $value["token"];
$timestamp = $value["timestamp"];

if ($email_token != $db_token) {
    echo "<h1>That is an invalid token, please try again.</h1>";
    header("Refresh:3; url=monkeydb.uccs.udu/group5", true, 401);
}

?>

<?php include("../partials/header.html"); ?>
<link rel="stylesheet" href="../assets/css/stylesheet.css">
<div class="ui inverted vertical masthead center aligned segment">
    <h1>Reset Password</h1>
    <div class="ui text container">
        <form action="./resetPasswordProcessor.php" method="POST" class="ui form">
            <p>Email: <?php echo $email ?></p>
            <div class="field">
                <input type="password" name="password" placeholder="New Password">
            </div>
            <div class="field">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <input type="text" value="<?php echo $email_token ?>" name="token" style="display: none;">
            <input type="text" value="<?php echo $email ?>" name="email" style="display: none;">
            <div class="ui error message"></div>
            <button style="width: 100%;" class="ui green button">Reset Password</button>
        </form>
    </div>
</div>
</div>


<script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            },
            password: {
              identifier  : 'confirm_password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>