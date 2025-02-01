<?php

require('../../model/userModel.php');

$to = $_POST['destination'];


$usedDestination = validdestination($to);

if($usedDestination){
    echo "invalid";
}
else{
    addDestination($to);
    echo "valid";
}



?>