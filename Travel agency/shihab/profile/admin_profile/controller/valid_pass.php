<?php 

function validpass($password) {
 
    if (strlen($password) < 8) {
        return false;
    }
 
    $contains_uppercase = false;
    $contains_lowercase = false;
    $contains_digit = false;
    $contains_special = false;
    $special_characters = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+');
 
 
    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];
 
        if (ctype_upper($char)) {
            $contains_uppercase = true;
        }
       
        elseif (ctype_lower($char)) {
            $contains_lowercase = true;
        }
       
        elseif (ctype_digit($char)) {
            $contains_digit = true;
        }
     
        elseif (in_array($char, $special_characters)) {
            $contains_special = true;
        }
    }
 
    return $contains_uppercase && $contains_lowercase && $contains_digit && $contains_special;
}

?>
