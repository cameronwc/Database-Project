<?php
    if(isset($_COOKIE["email"])){
        setcookie('email', '', time()-3600);
    }
    header("Location: /"); 
?>