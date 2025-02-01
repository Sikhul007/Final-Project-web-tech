<?php

require('../../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $destination = $_GET['destination'];
    $hotels = viewhotel($destination);
    
    echo json_encode($hotels);
}


$to = $_POST['to'];
$hotel= $_POST['hotel'];
$roomtype= $_POST['roomType'];
$roomnumber= $_POST['roomNumber'];
$people= $_POST['people'];
$duration= $_POST['duration'];
$transportation= $_POST['trasnportation'];
$transport= $_POST['transport'];
$ammount= $_POST['ammount'];


addpackage($to,$hotel,$roomtype,$roomnumber,$people,$duration,$transportation,$transport,$ammount);

header('Location:../../view/admin/adminview.php');

?>