<?php 
require('../../model/userModel.php');

$logolink = logo();

session_start();

if(!isset($_SESSION['tripflag'])){ 
    header('location:customplan.php');
}

unset($_SESSION['tripflag']);


$hotel= $_SESSION['trip_data']['to'];

$hoteloption = viewhotel($hotel);


?>


<html lang="en">
<head>
    <title>customplan</title>

    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>
</head>

<body>
    
<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

    <table width="100%" border="0">
        <tr>
            <td align="center" style="color:antiquewhite;">
                <h1><u>Custom Plan</u></h1>
            </td>
        </tr>
    </table>

    
<form method="post" action="../../controller/customplan/hotelinfoset.php" enctype="" onsubmit="return customhotel();">


        <div class="hotel">
            <select name="hotel" id="hotel"  >
                <option value="" disabled selected>Select your hotel</option>
                <?php foreach ($hoteloption as $option): ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                <?php endforeach; ?>             
            </select>
        </div>


        <div class="days"> 
            <select name="days"  id="days" >
                <option value="" disabled selected>Select days you will stay</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>


        <div class="people"> 
    
        <select name="people" id="people"  >
            <option value="" disabled selected>Select number of people</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option> 
        </select>
        </div>


        <div class="roomtype"> 
        <select name="roomType"  id="roomType">
            <option value="" disabled selected>Select room type</option>
            <option value="single bed">single bed</option>
            <option value="double bed">double bed</option>
            <option value="family bed">family bed</option>
        </select>
        </div>


        <div class="roomnumber"> 
        <select name="roomNumber" id="roomNumber" >
            <option value="" disabled selected>Select number of room</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        </div>


    <input type="submit" name="next" value="Next" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px; top: 500px; left: 650px; font-size: 30px;" >

</form>
</div>
</body>
</html>

