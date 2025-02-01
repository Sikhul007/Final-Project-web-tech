<?php

require('../../model/userModel.php');
 
$placeoption = viewPlace();

?>

<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer>
        
    </script>
</head>
<body>
<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

    <form method="POST" action="../../controller/admin/addpackage.php" enctype="" style="width: 23%; margin: auto; height: 100px" onsubmit="return addpackagebyadmin();">
 


    <div class="to" style=" position: absolute; width: 380px; height: 60px; top: 150; left: 150;">
    <select name="to"  id="to" >             
        <option value="" disabled selected>Select your destination</option>
        <?php foreach ($placeoption as $option): ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>                   
    </select>
    </div>


    
    <div class="hotel" style=" position: absolute; width: 380px; height: 60px; top: 150; left: 576;">
        <select name="hotel" id="hotel" >
            <option value="" disabled selected>Select hotel</option>
            <option value="hotel_j">hotel_j</option>
            <option value="hotel_O">hotel_O</option>
            <option value="hotel_N">hotel_N</option>
        </select>
    </div>


    <div class="roomType" style=" position: absolute; width: 380px; height: 60px; top: 150; left: 1000;">
        <select name="roomType"  id="roomType" >
            <option value="" disabled selected>Select room type</option>
            <option value="single bed">single bed</option>
            <option value="double bed">double bed</option>
            <option value="family bed">family bed</option>
        </select>
    </div>




    <div class="roomnumber" style=" position: absolute; width: 380px; height: 60px; top: 250; left: 150;">
        <select name="roomNumber"  id="roomNumber" >
            <option value="" disabled selected>Select room number</option>
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


    <div class="people" style=" position: absolute; width: 380px; height: 60px; top: 250; left: 576;" >
        <select name="people"   id="people" >
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


    <div class="days" style=" position: absolute; width: 380px; height: 60px; top: 250; left: 1000;">
        <select name="duration"   id="duration" >
            <option value="" disabled selected>Select days</option>
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



    <div class="journey" style=" position: absolute; width: 380px; height: 60px; top: 350; left: 150;">
        <select name="trasnportation"  id="trasnportation" >
            <option value="" disabled selected>Select a journey type</option>
            <option value="bus">bus</option>
            <option value="train">train</option>
            <option value="plane">plane</option>
        </select>
    </div>



    <div class="transport" style=" position: absolute; width: 380px; height: 60px; top: 350; left: 576;" >
        <select name="transport" id="transport"  >
            <option value="" disabled selected>Select a transport</option>
            <option value="transport A">transport A</option>
            <option value="transport B">transport B</option>
            <option value="transport C">transport C</option>
            <option value="transport D">transport D</option>
        </select>
    </div>


    <div class="text">
        <input type="text" name="ammount" id="ammount"  value="" placeholder="package price"; >
    </div>
        

        
    <input type="submit" name="confirm" value="Confrim" style="position: absolute; width: 200px; height: 50px; background-color: rgb(37, 159, 37); color: white; border-radius: 15px; top: 500px; left: 650px; font-size: 30px;" >
      
    </form>

</div>


<script>
document.getElementById('to').addEventListener('change', function() {
    var destination = this.value;
    if (destination) {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "../../controller/admin/addpackage.php", true);
        xhttp.send('destination='+ destination);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var hotelList = JSON.parse(this.responseText);
                var hotelSelect = document.getElementById('hotel');
                hotelSelect.innerHTML = ''; // Clear existing options
                hotelSelect.disabled = false; // Enable the select dropdown
                hotelList.forEach(function(hotel) {
                    var option = document.createElement('option');
                    option.value = hotel;
                    option.text = hotel;
                    hotelSelect.add(option);
                });
            }
        };
        
    } else {
        document.getElementById('hotel').disabled = true; // Disable the select dropdown if no destination is selected
    }
});
</script>

</body>
</html>