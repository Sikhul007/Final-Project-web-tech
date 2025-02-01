<?php

require('../../model/userModel.php');
 
$placeoption = viewPlace();

?>



<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>
</head>
<body>

<div class="desktop" style="display: flex; justify-content: center; align-items: center;">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>


    <form method="POST" action="../../controller/admin/addservice.php" enctype="" style="width: 23%; margin: auto; height: 100px" onsubmit="return serviceaddbyadmin();" >
        
        
        <div class="journey" style="width: 400px; position: absolute; left:35%; top: 90px;">
            <select name="type" id="type">
                <option value="" disabled selected>Select transport type</option>
                <option value="bus">bus</option>
                <option value="train">train</option>
                <option value="plane">plane</option>
            </select>
        </div>
           
       
        <div id="name" style="width: 400px; height: 70px; border-radius: 10px; position: absolute; left:35%; top: 180px; box-shadow: 4px 4px 5px grey;">
            <input type="text" name="name" id="name1" value="" placeholder="write transport name">
        </div> 
       
        <div class="from" style="position: absolute; left:35%; top: 270px;">
            <select name="form" id="from" >
                <option value="" disabled selected>Select your start point</option>
                <?php foreach ($placeoption as $option): ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                 <?php endforeach; ?>
            </select>
        </div>

        <div class="to" style="position: absolute; left:35%; top: 360px;">
            <select name="to" id="to"  >             
                <option value="" disabled selected>Select your destination</option>
                <?php foreach ($placeoption as $option): ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                <?php endforeach; ?>                   
            </select>
        </div>

        <div id="name" style="width: 400px; height: 70px; border-radius: 10px; box-shadow: 4px 4px 5px grey; position: absolute; left:35%; top: 450px;">
            <input type="text" name="price" id="price" value="" placeholder="write transport price" min="0">
        </div> 

        <input type="submit" name="confirm" value="Confirm" style="position: absolute; width: 180px; height: 40px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px;top: 550px;left:42% ;font-size: 27px; " >

    </form>
</div>
</body>
</html2