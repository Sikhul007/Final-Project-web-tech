<?php 


session_start();

$_SESSION['tripflag'] = 'true';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['next'])) {

    if($_POST['form']===$_POST['to']){
        header('Location:../../view/customplan/customplan.php');
    }
    else{
        $_SESSION['trip_data'] = [
            'from' => $_POST['form'],
            'to' => $_POST['to'],
            'date' => $_POST['date']
        ];
        header('Location:../../view/customplan/customhotel.php');
    }
    
}

?>