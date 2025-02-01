<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Down</title>

    <link rel="stylesheet" href="../asset/top bottom.css"/>

</head>
<body>
    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>

    <table border="0" cellspacing="0">
        <tr class="border-bottom">
            <td  style="border-right: 1px solid #ccc;">
                <img src="../Asset/1.png">
                <a href="http://twitter.com" target="_blank"><img src="../Asset/twitter.png" width="30" alt="Twitter"></a>
                <a href="http://linkdin.com" target="_blank"><img src="../Asset/linkdin.png" width="30" alt="LinkedIn"></a>
                <a href="http://facebook.com" target="_blank"><img src="../Asset/images.png" width="30" alt="Facebook"></a>
                <a href="http://gmail.com" target="_blank"><img src="../Asset/gmail.png" width="30" alt="Gmail"></a>
                <a href="http://youtube.com" target="_blank"><img src="../Asset/youtube.png" width="30" alt="Youtube"></a>
            </td>
            <td align="right" style="border-left: 1px solid #ccc;">
                <select>
                    <option value="" selected>Bangladesh</option>
                </select>
                <a href="Registration.php">Sign up</a> |
                <a href="Login.php">Sign in</a>
            </td>
        </tr>
        <!-- <tr class="border-top">
            <td colspan="2">
           
            </td>
        </tr> -->
    </table>

    <table border="0" cellspacing="0">
        <tr class="border-bottom">
            <td valign="top" width="200" style="border-right: 1px solid #ccc;">
                <b>Quick menu</b>
                <ul>
                <li><a href="Vlog.php">Vlog</a></li>
                    <li><a href="Tour packages.php">Tour packages</a></li>
                </ul>
            </td>
            <td valign="top" align="center" style="border-left: 1px solid #ccc; border-right: 1px solid #ccc;">
                <b><h3>Contact us</h3></b>
                <a href="http://twitter.com" target="_blank"><img src="../Asset/twitter.png" width="30" alt="Twitter"></a>
                <a href="http://linkdin.com" target="_blank"><img src="../Asset/linkdin.png" width="30" alt="LinkedIn"></a>
                <a href="http://facebook.com" target="_blank"><img src="../Asset/images.png" width="30" alt="Facebook"></a>
                <a href="http://gmail.com" target="_blank"><img src="../Asset/gmail.png" width="30" alt="Gmail"></a>
                <a href="http://youtube.com" target="_blank"><img src="../Asset/youtube.png" width="30" alt="Youtube"></a>
            </td>
            <td valign="top" width="300" style="border-left: 1px solid #ccc;">
                <b>About Us</b>
                <ul>
                    <li>"Welcome to X company, your premier travel management partner. With a passion for exploration and attention to detail, we offer personalized journeys to suit every traveler. From dreamy beach retreats to exhilarating mountain escapes, let us create unforgettable memories tailored just for you. Embark on your adventure today!"</li>
                </ul>
            </td>
            </tr>
            <tr>
            <td colspan="3" align="center" height="25px">
                Copyright &copy; <?php echo $currentYear; ?>
            </td>
</tr>
</table>
</body>
</html>
