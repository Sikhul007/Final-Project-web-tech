<?php

if(isset($_POST['register'])){

        if(!empty($_POST['user']) && !empty($_POST['id']) && !empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['dob']) && !empty($_POST['gender'])){
            $user = $_POST['user'];
            $id = $_POST['id'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
             
            // $checkpass = validpass($pass);
            // if(!$checkpas){
            //     $_SESSION['error_message'] = "Error: must have 5 character, one uppercase, one lowercase, one number, one special character.";
            //     header("Location:../view/Login.php");
            // }
            $sql ="INSERT INTO user (Name, ID, Email, pass, DOB, gender) VALUES ('$user', '$id', '$mail', '$pass', '$dob', '$gender')";
            try{
                mysqli_query($conn, $sql);
                //header ("Location:Login.php");
                echo "User Registered!<br>";
            }
            
            catch(mysqli_sql_exception){
                echo "Couldn't Register! <br>";
            }

        } else {
            echo "Form fields are missing!";
        }
    }

    // function validpass($pass) {
 
    //     if (strlen($pass) < 5) {
    //         return false;
    //     }
       
    //     $contains_uppercase = false;
    //     $contains_lowercase = false;
    //     $contains_digit = false;
    //     $contains_special = false;
    //     $special_characters = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+');
       
       
    //     for ($i = 0; $i < strlen($pass); $i++) {
    //         $char = $pass[$i];
       
    //         if (ctype_upper($char)) {
    //             $contains_uppercase = true;
    //         }
           
    //         elseif (ctype_lower($char)) {
    //             $contains_lowercase = true;
    //         }
           
    //         elseif (ctype_digit($char)) {
    //             $contains_digit = true;
    //         }
         
    //         elseif (in_array($char, $special_characters)) {
    //             $contains_special = true;
    //         }
    //     }
       
    //     return $contains_uppercase && $contains_lowercase && $contains_digit && $contains_special;
    //    }
       
                                           
                                           
?>