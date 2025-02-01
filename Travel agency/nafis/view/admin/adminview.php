<?php 
require('../../model/userModel.php');

$userdata=getuserinfo();
$busdata=busInfo();
$traindata=trainInfo();
$planedata=planeInfo();
$his = purchasedhistory();
$packagedata = packageInfo();
$destination = destination();
$logolink = logo();

?> 

<html lang="en">
<head>
    <title>admin</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <style>
        table {
            background-color: floralwhite;
        }

    </style>
</head>
<body >
<div class="desktop" style=" background-color: rgb(219, 224, 210);">
     
    <table width="100%" border="0" style="background-color: rgb(219, 224, 210);">
        <tr>
            <td align="left">
                <img src="<?php echo $logolink; ?>"  height="70" width="80">
            </td>
            <td align="center">
                <h1><u>Admin Panel</u></h1>
            </td>
            <td align="right">
                <button style="width: 50px; height: 40px; background-color: red; color: white">logout</button>
            </td>
        </tr>
    </table>







<u> <h2>Change profile logo:</h2> </u>

    <form method="POST" action="../../controller/admin/logoupload.php" enctype="multipart/form-data">
       <h3> Select Image: <input type="file" name="myfile" value="" >
        <input type="submit" name="Submit" value="Change" style="width: 70px; height: 30px; background-color: orange; color: black;"/>
    </form>





   <u> <h2>Users Information :</h2> </u>
    
    <table width="100%" border="1" cellspacing="0" align="center"  >
    <tr>
         <th>User ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Gender</th>
         <th>Date of birth</th>
         <th>Password</th>
         <th>Actions</th>
    </tr>
    <?php
    
    for($i=0;$i<count($userdata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $userdata[$i]['userid'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['name'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['email'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['gender'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['date of birth'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['password'] . "</td>";
            
           
            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deleteuser.php">
            <input type="hidden" name="userid" value="' .$userdata[$i]['userid'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';
    }
    ?>
     </table>

   <h3>Add new user :
    <form method="post" action="userAddbyAdmin.php">
        <input type="submit" name="Add New User" value="Add New User" style="width: 100px; height: 30px; background-color: green; color: white;" >
    </form>







<u> <h2>Service Provider Information :</h2> </u>


<h3>Bus :</h3>
    <table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>ID</th>
         <th>Name</th>
         <th>From</th>
         <th>To</th>
         <th>Price</th>
         <th>Actions</th>
        
    </tr>
    <?php
    
    for($i=0;$i<count($busdata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $busdata[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $busdata[$i]['name'] . "</td>";
            echo "<td align=\"center\">" . $busdata[$i]['from'] . "</td>";
            echo "<td align=\"center\">" . $busdata[$i]['to'] . "</td>";
            echo "<td align=\"center\">" . $busdata[$i]['price'] . "</td>";
            
           
            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deletebus.php">
            <input type="hidden" name="id" value="' .$busdata[$i]['id'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';
    }
    ?>
     </table>




 <h3>Train :</h3>
    <table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>ID</th>
         <th>Name</th>
         <th>From</th>
         <th>To</th>
         <th>Price</th>
         <th>Actions</th>
        
    </tr>
    <?php
    
    for($i=0;$i<count($traindata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $traindata[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $traindata[$i]['name'] . "</td>";
            echo "<td align=\"center\">" . $traindata[$i]['from'] . "</td>";
            echo "<td align=\"center\">" . $traindata[$i]['to'] . "</td>";
            echo "<td align=\"center\">" . $traindata[$i]['price'] . "</td>";
            
           
            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deletetrain.php">
            <input type="hidden" name="id" value="' .$traindata[$i]['id'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';
    }
    ?>
     </table>




<h3>Plane :</h3>
    <table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>ID</th>
         <th>Name</th>
         <th>From</th>
         <th>To</th>
         <th>Price</th>
         <th>Actions</th>
        
    </tr>
    <?php
    
    for($i=0;$i<count($planedata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $planedata[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $planedata[$i]['name'] . "</td>";
            echo "<td align=\"center\">" . $planedata[$i]['from'] . "</td>";
            echo "<td align=\"center\">" . $planedata[$i]['to'] . "</td>";
            echo "<td align=\"center\">" . $planedata[$i]['price'] . "</td>";
            
           
            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deleteplane.php">
            <input type="hidden" name="id" value="' .$planedata[$i]['id'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';
    }
    ?>
     </table>


<h3>Add new Service Provider :
    <form method="post" action="serviceAddbyAdmin.php">
        <input type="submit" name="Add New service" value="Add New Service" style="width: 130px; height: 30px; background-color: green; color: white;" >
    </form>


<u> <h2>Purchased History :</h2> </u>


<table width=100% border="1" cellspacing="0" align="center" >
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




<u> <h2>Package Infromation :</h2> </u>

<table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>Package id</th>
         <th>To</th>
         <th>Hotel</th>
         <th>Room Type</th>
         <th>Room number</th>
         <th>People</th>
         <th>Duration</th>
         <th>Transportation</th>
         <th>Transport</th>
         <th>Price</th>
         <th>Actions</th>
         

        
    </tr>
    <?php
    
    for($i=0;$i<count($packagedata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $packagedata[$i]['offerid'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['to'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['hotel'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['room type'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['room number'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['people'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['duration'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['transportation'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['transport'] . "</td>";
            echo "<td align=\"center\">" . $packagedata[$i]['ammount'] . "</td>";
            

            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deletepackage.php">
            <input type="hidden" name="id" value="' .$packagedata[$i]['offerid'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';

    }
    ?>
     </table>


<h3>Add new package :
    <form method="post" action="addpackagebyAdmin.php">
        <input type="submit" name="Add New package" value="Add New package" style="width: 130px; height: 30px; background-color: green; color: white;" >
    </form>





<u> <h2>Destinations :</h2> </u>

<table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>ID</th>
         <th>Destinations</th>
         <th>Actions</th>
    </tr>
    <?php
    
    for($i=0;$i<count($destination);$i++){
        echo "<tr>";

            echo "<td align=\"center\">" . $destination[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $destination[$i]['place'] . "</td>";

            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deleteDestination.php">
            <input type="hidden" name="id" value="' .$destination[$i]['id'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';

    }
    ?>
     </table>


<h3>Add new destination :
    <form method="post" action="addDestination.php">
        <input type="submit" name="Add New desntination" value="Add New destination" style="width: 140px; height: 30px; background-color: green; color: white;" >
    </form>

</div>   
</body>
</html>
