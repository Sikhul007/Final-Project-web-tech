<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="../asset/contact us.css"/>
   
</head>
<body>

<form name="contactForm" method="post" action="display_info.php" onsubmit="return validateForm()">
    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>
    <table border="1" cellspacing="0" width="700px">
        <tr>
            <td valign="top" width="350px" align="left" style="border-right: none;">
                <b>About Us</b>
                <ul>
                    <li style ="font-weight: normal;">lstWelcome to X company, your premier travel management partner. With a passion for exploration and attention to detail, we offer personalized journeys to suit every traveler. From dreamy beach retreats to exhilarating mountain escapes, let us create unforgettable memories tailored just for you. Embark on your adventure today!</li>
                </ul>
                <a href="http://twitter.com" target="_blank"><img src="../Asset/twitter.png" width="30px"></a>
                <a href="http://linkedin.com" target="_blank"><img src="../Asset/linkdin.png" width="30px"></a>
                <a href="http://facebook.com" target="_blank"><img src="../Asset/images.png" width="30px"></a>
                <a href="http://gmail.com" target="_blank"><img src="../Asset/gmail.png" width="30px"></a>
                <a href="http://youtube.com" target="_blank"><img src="../Asset/youtube.png" width="30px"></a>
            </td>
            <td valign="top" width="350px" align="left" style="border-left: none;">
                <fieldset>
                    <legend><b>Contact Us</b></legend>
                    Name :  <input type="text" name="name" id="name" value="" /><br>
                    Email: <input type="email" name="email" id="email" value="" placeholder="sample@example.com"><br>
                    Your Message: <input type="text" name="message" id="message" value="" /><br>
                    <input type="submit" value="Submit" /><br><br>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" height="25px">
                &copy; <?php echo $currentYear; ?> X Company
            </td>
        </tr>
    </table>
</form>


<script src="../asset/contact us.js"></script>
</body>
</html>
