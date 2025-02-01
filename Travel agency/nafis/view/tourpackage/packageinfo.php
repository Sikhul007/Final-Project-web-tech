<?php 
require('../../model/userModel.php');
 
$placeoption = viewPlace();

session_start();


if (isset($_POST['offerid'])) {
    $_SESSION['offerdetail'] = getofferdetails($_POST['offerid']);

}

?>


<html lang="en">
<head>
    <title>package info </title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>
</head>
<body>

<script>
    let destination = "<?php echo $_SESSION['offerdetail'][0]['to']; ?>";
</script>

<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>


<table width="100%" border="0">
        <tr>
            <td align="center" style="color:antiquewhite;"><br>
                <h1><u>Package confirmation</u></h1>
            </td>
        </tr>
</table>

    <form method="post" action="../../view/tourpackage/packageconfirm.php" enctype="" onsubmit="return samedestination(destination);">


        <div class="from" style="left:320px">
            <select name="form"  id="from1">
            <option value="" disabled selected>Select your start point</option>
            <?php foreach ($placeoption as $option): ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
            <?php endforeach; ?>
            </select>
        </div>


        <div class="date" style="left:770px">
            <input type="date" name="date" id="date1" placeholder="Enter your vacation date" style=" height: 40px; width: 250px; font-size: 23px; border: none; outline:none;"  min="<?php echo date('Y-m-d'); ?>">
        </div>


        <input type="submit" name="next" value="Next" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px;top: 400px;left: 650px;font-size: 30px; " >

       
    </form>
    
</body>
</html>
