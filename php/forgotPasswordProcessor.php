<?php
    include("db.php");
    require("../libraries/PHPMailer.php");
    require("../libraries/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    
    // Mail Setup
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "db.project.uccs@gmail.com"; // GMAIL username
    $mail->Password = "xI2#4xHSUC&x"; // GMAIL password

    $user = $_POST['Email'] ;
    
    $token = bin2hex(random_bytes(50));

    $sql = "INSERT INTO password_reset (email, token) VALUES ('$user', '$token');";
    $res = $conn->query($sql);
    if ($res === TRUE) {
        //Typical mail data
        $mail->AddAddress($user);
        $mail->SetFrom('db.project.uccs@gmail.com', 'Rate The Loser Admin');
        
        $mail->Subject = "Rate The Loser - Password Reset";
        $mail->Body = "Please reset your password http://monkeydb.uccs.edu/~group5/php/resetPassword.php?token=$token&email=$user";


        // Send mail
        try{
            $mail->Send();
            header("Location: /~group5"); /* Redirect browser */
        exit;
        } catch(Exception $e){
            header("Location: /~group5"); /* Redirect browser */
        exit;
        }
    }
?>
