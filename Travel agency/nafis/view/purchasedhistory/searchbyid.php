<?php 
require('../../model/userModel.php');

@$id= $_POST['id'];

@$his = userpurchasedhistory($id);

?>


<html lang="en">

<head>
    <title>searchbyid</title>
    <link rel="stylesheet" href="../../assest/style.css" />
</head>


<body >

<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

<form method="POST" action="searchbyid.php" enctype="" >

        <div class="search"> <input type="text" name="id" value="" placeholder="Search by id"  > </div>
        
</form>


<table border="1" cellspacing="0" align="center" style="position: absolute; top:250px; font-size: 19px;background-color: rgb(243, 244, 236); width:100%; ">
    <tr>
         <th>User ID</th>
         <th>Plan Type</th>
         <th>From</th>
         <th>To</th>
         <th>Checkin Time</th>
         <th>Num of People</th>
         <th>Hotel</th>
         <th>Room Type</th>
         <th>Room Number</th>
         <th>Duration</th>
         <th>Journey Date</th>
         <th>Journey By</th>
         <th>Transport</th>
         <th>Traveling Person</th>
         <th>Total Ammount</th>
         <th>Paid By</th>

    </tr>
    <?php
    foreach ($his as $r) {
        echo "<tr>";
        foreach ($r as $data) {
            echo "<td align=\"center\">$data</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</div> 
</body>
</html>

