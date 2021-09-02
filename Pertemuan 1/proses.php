<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    $truename = "dian";
    $truepasswd = "dian";

    if ($truename = $username) {
        if ($truepasswd == $password) {
 
            header( "Location: index.php" );

        }else {
            header("Location: login.php");
        }
        
    }



?>