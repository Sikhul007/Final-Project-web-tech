<?php

session_start();

if(!isset($_COOKIE['stay_signed_in_cookie'])){ 
    
    if(!isset($_SESSION['loginflag'])){ 
        header('location:login.php');
    }
    
}


?>



<html lang="en">
<head>
    <title>login</title>
</head>
<body >

<h1> welcome to homepage </h1>

<form method="post" action="../../controller/auth/checklogout.php">
    <input type="submit" name="Logout" value="Logout" style="width: 50px; height: 20px; background-color: red; color: white;" >
</form> 

</body>
</html>