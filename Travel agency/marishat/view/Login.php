<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../asset/login.css"/>

    
</head>
<body>  
    <form method="post">
        ID: <br>
        <input type="number" name="id"> <br>
        Password: <br>
        <input type="password" name="pass"> <br> 
        <a href="Forget password.php">Forget password?</a> <br> <br>
        <input type="submit" name="login" value="Log In">
        <button><a href="Registration.php">Register</a></button>
        <br>
    </form>
    <?php 
        include("../model/database.php");
        include ("../controller/logincheck.php");
    ?>
</body>
</html>
