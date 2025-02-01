<?php 

session_start();

$_SESSION['transportlag'] = 'true';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $_SESSION['transport_data'] = [
        'journeyby' => $_POST['journeyby'],
        'transport' => $_POST['transport'],
        'date' => $_POST['date'],
        'people' => $_POST['people'],
       
    ];
    header('Location:../../view/customplan/confirmation.php');
    

}

?>
