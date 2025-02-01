<?php
require('../../model/userModel.php');
session_start();

$expiration_time = time() + (10 * 365 * 24 * 60 * 60);


    $email = $_REQUEST["email"]; 
    $password = $_REQUEST["password"];
    $checkbox= $_REQUEST["checkbox"];

    $checkuser = validuser($email, $password);
     
    if($checkuser){

        if($checkuser =='yes'){
            setcookie('stay_signed_in_cookie', 'true', $expiration_time, '/');
            $_SESSION['loginflag']=true;
        }
        else{
           $_SESSION['loginflag']=true;
        }

        echo "valid";
    }
    else{
        
        echo "invalid";
    }

?>