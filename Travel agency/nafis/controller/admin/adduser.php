<?php

require('../../model/userModel.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["date"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    $checkpas= validpass($password);
    $checkname= validname($name);
    $checkemail= validemail($email);


   
    if ($password != $repassword) {
        header("Location:../../view/admin/userAddbyAdmin.php");
        
    } 
    elseif(!$checkpas){
       
        header("Location:../../view/admin/userAddbyAdmin.php");
    }
    elseif(!$checkname){
       
        header("Location:../../view/admin/userAddbyAdmin.php");
    }
    elseif($checkemail){
       
        header("Location:../../view/admin/userAddbyAdmin.php");
    }

    else {

        registrationDataEntry($name,$email,$gender,$dob,$password);
        header('Location:../../view/admin/adminview.php');
       
    }
}
?>