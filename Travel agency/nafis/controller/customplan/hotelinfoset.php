<?php 
ob_start();


session_start();

$_SESSION['hotelflag'] = 'true';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['next'])) {
    
    $_SESSION['hotel_data'] = [
        'hotel' => $_POST['hotel'],
        'days' => $_POST['days'],
        'people' => $_POST['people'],
        'roomType' => $_POST['roomType'],
        'roomNumber' => $_POST['roomNumber']   
    ];
    header('Location:../../view/customplan/customtransport.php');


}
ob_end_flush();
?>
