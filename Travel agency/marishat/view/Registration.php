<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
   
     <link rel="stylesheet" href="../asset/reg.css"/>

     <script src="../asset/registration.js"></script>
</head>
<body>
    <form action="" method ="post" onsubmit="return validateForm()">
        Name: <br>
        <input type="text" name="user"><br>
        ID: <br>
        <input type="number" name="id"><br>
        E-mail: <br>
        <input type="email" name ="mail"><br>
        Password: <br>
        <input type="password" name ="pass"><br>
        Date of Birth: <br>
        <input type="date" name ="dob"><br><br>
        Gender: <br>
        <input type="radio" name ="gender" value="male">Male
        <input type="radio" name ="gender" value="female">Female<br><br>
        <input type="submit" name="register" value ="Register">
        <button class="login_registration"><a href="Login.php">Log In</a></button>
    </form>
    <?php
        // Your PHP code
        include("../model/database.php");
        include("../controller/registrationcheck.php");

    ?>
</body>
</html>