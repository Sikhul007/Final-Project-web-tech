
<?php

session_start();


if (isset($_POST['next'])) {
    $from = $_POST['form'];
    $date = $_POST['date'];
}


$to = $_SESSION['offerdetail'][0]['to'];
$hotel= $_SESSION['offerdetail'][0]['hotel'];
$roomtype= $_SESSION['offerdetail'][0]['room type'];
$roomnum= $_SESSION['offerdetail'][0]['room number'];
$people= $_SESSION['offerdetail'][0]['people'];
$duration= $_SESSION['offerdetail'][0]['duration'];
$transportation= $_SESSION['offerdetail'][0]['transportation'];
$transport= $_SESSION['offerdetail'][0]['transport'];
$ammount= $_SESSION['offerdetail'][0]['ammount'];

if($from==$to){
    header('Location:../../view/tourpackage/packageinfo.php');
}
?>

<html>
<head>
    <title>package </title>
    <link rel="stylesheet" href="../../assest/style.css" />
</head>
<body>

<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>


<br><br><br><br>

<table width="400px" border="1" align="center" cellspacing="0">
    <tr >
        <td  align ="center" style="font-size: 30px; padding: 10px; background-color: rgb(243, 244, 236);">Custom Plan Details </td>
    </tr>

<td width="400px" style="font-size: 28px; padding: 10px; background-color: rgb(243, 244, 236);">
<?php

echo "<b>Tour type :</b> Package Tour<br>";
echo "<b>From :</b> " . $from . "<br>";
echo "<b>To : </b>" . $to . "<br>";
echo "<b>Date :</b> " . $date . "<br>";  
echo "<b>Hotel :</b> " . $hotel . "<br>";
echo "<b>Days :</b> " . $duration . "<br>";
echo "<b>People :</b> " . $people . "<br>";
echo "<b>Room type :</b> " . $roomtype . "<br>";
echo "<b>Room number :</b> " . $roomnum . "<br>";
echo "<b>Journey by :</b> " . $transportation . "<br>";
echo "<b>Transport :</b> " . $transport . "<br>";
echo "<b>Journey date :</b> " . $date . "<br>";
echo "<b>People traviling:</b> " .$people . "<br>";
echo "<b>Total ammount :</b> " . $ammount;

?>
</td>

</table>
<form action="../../../marishat/view/Tour Guide.php">
<input type="submit" name="next" value="Next" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px;top: 350px;left: 900px;font-size: 30px; " >
</form>

</div>
</body>
</html>






