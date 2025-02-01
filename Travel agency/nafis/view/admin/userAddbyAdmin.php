<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="../../assest/style.css" />
    <script src="../script.js" defer></script>
</head>
<body>

<div class="desktop">
<div id="d1"></div>
<div id="d2"></div>
<div id="d3"></div>
<div id="d4"></div>


    <form method="post"  enctype="" onsubmit="return registration();">

    <div class="loginform" style="height: 610px; top: 70;">

    <label > User Adding </label>

    <div id="name"> <input type="text" name="name" id="name1" value="" placeholder="Name" > </div>

    <div id="email" style="top: 175px;"> <input type="text" name="email" id="email2" value="" placeholder="Email" > </div>

    <div id="gender"> <input type="radio" name="gender1" value="male" checked> Male
                      <input type="radio" name="gender1" value="female" style="left: 25px; "> Female
    </div>

    <div id="dob"> <input type="date" name="date" id="date1" placeholder="Date of birth"   ></div>

    <div id="password" style="top:360px"> <input type="password" name="password" id="pass1" value="" placeholder="Password"  > </div>

    <div id="password"style="top:430px"> <input type="password" name="repassword" id="pass2" value=""  placeholder="Re-password">  </div>

    <div id="button" style="top: 550px;"> <input type="submit" name="next" value="ADD USER"  > </div>

</div> 
       
</form>
</div>
</body>
</html2