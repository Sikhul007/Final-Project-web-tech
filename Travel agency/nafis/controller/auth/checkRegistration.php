<?php
require('../../model/userModel.php');
session_start();


$data = $_REQUEST["data"];
$user = json_decode($data);

    $name = $user->name;
    $email = $user->email;
    $gender = $user->gender;
    $dob = $user->dob;
    $password = $user->password;
  

    $checkemail= validemail($email);

  
    if($checkemail){
       
        echo "invalid" ;
        
    }

    else if(!$checkemail){
       
        registrationDataEntry($name,$email,$gender,$dob,$password);

        echo "valid";
        
    }
    

  

?>