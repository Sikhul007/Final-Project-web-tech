<?php
require('../../model/userModel.php');

session_start();

if(!isset($_SESSION['transportlag'])){
    header('location: customplan.php');
}

unset($_SESSION['transportlag']);


$from = $_SESSION['trip_data']['from'];
$to = $_SESSION['trip_data']['to'];
$checkin_date = $_SESSION['trip_data']['date'];
$hotel = $_SESSION['hotel_data']['hotel'];
$duration = $_SESSION['hotel_data']['days'];
$people = $_SESSION['hotel_data']['people'];
$roomtype = $_SESSION['hotel_data']['roomType'];
$roomnumber =$_SESSION['hotel_data']['roomNumber'];
$journeyby = $_SESSION['transport_data']['journeyby'];
$transport = $_SESSION['transport_data']['transport'];
$journeydate = $_SESSION['transport_data']['date'];
$travellers = $_SESSION['transport_data']['people'];

$rent=rent();
$fee=fee();

?>


<html lang="en">
<head>
    <title>customplan</title>
    <link rel="stylesheet" href="../../assest/style.css" />
</head>

<body>
    
<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

<br><br><br><br>
<table width="780px" border="1" align="center" cellspacing="0">
    <tr >
        <td colspan="2" align ="center" style="font-size: 25px; padding: 10px; background-color: rgb(243, 244, 236);">Custom Plan Details </td>
    </tr>
       
       
    <tr>
        <td width="360px" style="font-size: 25px; padding: 10px; background-color: rgb(243, 244, 236);">
            
            <?php
            echo "<b>From :</b> $from <br>";
            echo "<b>To : </b> $to <br>";
            echo "<b>Date : </b> $checkin_date <br>";  
            echo "<b>Hotel : </b> $hotel <br>";
            echo "<b>Days : </b> $duration <br>";
            echo "<b>People : </b> $people <br>";
            echo "<b>Room type : </b> $roomtype <br>";
            echo "<b>Room number : </b> $roomnumber <br>";
            echo "<b>Journey by : </b> $journeyby <br>";
            echo "<b>Transport : </b> $transport <br>";
            echo "<b>Journey date : </b> $journeydate <br>";
            echo "<b>People traviling: </b>$travellers <br>";
            echo "<b>Hotel rent per day : </b>$rent <br>";
            echo "<b>Transport fee per person :</b> $fee <br><br>";
            ?>
            
        </td>

         
        <td width="420px" style="font-size: 25px; padding: 10px; background-color: rgb(243, 244, 236);">
        <?php
        echo "<b>Total rent : </b>$rent x $duration x $roomnumber = " . $rent*$duration*$roomnumber."<br>";
        echo "<b>Total transport fee : </b>$fee x $travellers = " . $fee*$travellers."<br><br>";
        echo "<b>Total ammount : </b>" . $rent*$duration*$roomnumber ." + ". $fee*$travellers." = ". $rent*$duration*$roomnumber + $fee*$travellers;
        $totalAmount = $rent*$duration*$roomnumber + $fee*$travellers;
        $_SESSION['ammount'] = [
            'ammount' => ['ammount' => $totalAmount] 
           
        ];
        ?>
        </td>

    </tr>

</table>

</div>

<form action="../../../shihab/payment/payment.php">
<input type="submit" name="next" value="Next" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px;top: 450px;left: 700px;font-size: 30px; " >
</form>
</body>
</html>





