<?php 
require('../../model/userModel.php');
$logolink = logo();

session_start();

if(!isset($_SESSION['hotelflag'])){
    header('location: customplan.php');
}

unset($_SESSION['hotelflag']);

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


<form method="post" action="../../controller/customplan/transportinfoset.php" enctype="" onsubmit="return customtransport();" >



<div class="journey">
    <select name="journeyby"  id = "journeyby">
        <option value="" disabled selected>Select transport type</option>
        <option value="bus">bus</option>
        <option value="train">train</option>
        <option value="plane">plane</option>
    </select>
</div>


<div class="transport">
    <select name="transport" id = "transport" >
        <option value="" disabled selected>Select your transport</option>
        <option value="transport A">transport A</option>
        <option value="transport B">transport B</option>
        <option value="transport C">transport C</option>
        <option value="transport D">transport D</option>
    </select>
</div>


<div class="journeydate">
    <label style="font-size: 23px;">Journey date:    </label>
    <input type="date" name="date" id = "date1" style=" height: 40px; width: 280px; font-size: 23px; border: none; outline:none;"  min="<?php echo date('Y-m-d'); ?>" max="<?php echo date($_SESSION['trip_data']['date']); ?>">
</div>


<div class="peoples">
    <select name="people" id = "people">
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


<input type="submit" name="next" value="Next" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px; top: 500px; left: 650px; font-size: 30px;" >

</form>
</div>
</body>
</html>
