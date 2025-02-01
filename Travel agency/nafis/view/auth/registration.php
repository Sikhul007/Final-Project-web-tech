
<html lang="en">
<head>
    <title>registration</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>
</head>
<body >

<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

<form method="post" onsubmit="return registration();">

    <div class="loginform" style="height: 610px; top: 70;">

        <label style="left:45px;";> REGISTRATION </label>

        <div id="name"> <input type="text" id="name1" name="name" value="" placeholder="Name" > </div>

        <div id="email" style="top: 175px;"> <input type="text" id="email2" name="email" value="" placeholder="Email" > </div>

        <div id="gender"> <input type="radio" name="gender1" value="male" > Male
                          <input type="radio" name="gender1" value="female" style="left: 25px; "> Female
        </div>

        <div id="dob"> <input type="date" id="date1" name="date" placeholder="Date of birth"   ></div>

        <div id="password" style="top:360px"> <input type="password" id="pass1" name="password" value="" placeholder="Password"  > </div>

        <div id="password"style="top:430px"> <input type="password" id="pass2" name="repassword" value=""  placeholder="Re-password">  </div>

        <div id="button" style="top: 500px;"> <input type="submit" name="next" value="Register"  > </div>

        <div id="herf" style="top: 565px;"><a href="login.php">Already have an account?</a></div>

    </div> 
           
</form>
</div>
</body>
</html>