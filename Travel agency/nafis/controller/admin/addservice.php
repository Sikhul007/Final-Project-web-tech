<?php

require('../../model/userModel.php');

$type= $_POST['type'];
$name= $_POST['name'];
$from= $_POST['form'];
$to= $_POST['to'];
$price= $_POST['price'];

if($from==$to){
    header('Location:../../view/admin/serviceAddbyAdmin.php');
}
else{
    addservice($type,$name,$from,$to,$price);
    header('Location:../../view/admin/adminview.php');
}

?>