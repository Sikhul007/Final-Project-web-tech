<?php
session_start();


?>


<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>

</head>
<body >


<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>

<form method="post"  onsubmit="return login();">

    
    <div class="loginform">

       <label > LOGIN HERE </label>

       <div id="email"> <input type="text" id="email1" name="email"  placeholder="Email"  > </div>

       <div id="password"><input type="password" id="password1" name="password" value="" placeholder="Password"  ></div>

       <div id="checkbox"><input type="checkbox" name="staysign" id="checkbox1" value="yes" > Stay  sign  in</div>

       <div id="herf"><a href="registration.php">Don't have an account ?</a></div>
        
       <div id="button"><input type="submit" name="submit" value="Login"  ></div>
    </div>

       
    </form>





</div>
</body>
</html>