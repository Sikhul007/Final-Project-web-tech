<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
            vertical-align: top;
            border: 1px solid #ddd;
        }

        img {
            width: 30px;
            margin-right: 5px;
            vertical-align: middle;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        h3 {
            margin-top: 0;
            color: #007bff;
        }

        ul {
            margin-top: 0;
            padding-left: 20px;
        }

        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>

    <table border="0" cellspacing="0">
        <tr height="100px">
            <td style="border-right: none;">
                <img src="../Asset/1.png" width="100" alt="Logo">
                <a href="http://twitter.com" target="_blank"><img src="../Asset/twitter.png" width="30" alt="Twitter"></a>
                <a href="http://linkedin.com" target="_blank"><img src="../Asset/linkdin.png" width="30" alt="LinkedIn"></a>
                <a href="http://facebook.com" target="_blank"><img src="../Asset/images.png" width="30" alt="Facebook"></a>
                <a href="http://gmail.com" target="_blank"><img src="../Asset/gmail.png" width="30" alt="Gmail"></a>
                <a href="http://youtube.com" target="_blank"><img src="../Asset/youtube.png" width="30" alt="YouTube"></a>
            </td>
            <td align="right" style="border-left: none;">
                <select name="">
                    <option value="" selected>Bangladesh</option>
                </select>
                <a href="Registration.php">Sign up</a> |
                <a href="Login.php">Sign in</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="About us.php">About us</a> |
                <a href="Contact us.php">Contact us</a> |
                <a href="Vlog.php">Vlog</a> |
                <a href="Tour packages.php">Tour packages</a> |
                <a href="Tour Guide.php">Tour Guides</a>
            </td>
        </tr>
    </table>

    <table border="0" cellspacing="0">
        <tr height="200px">
            <td valign="top" width="200px" style="border-right: none;">
                <b>Quick menu</b>
                <ul>
                    <li><a href="Vlog.php">Vlog</a></li>
                    <li><a href="Tour packages.php">Tour packages</a></li>
                </ul>
            </td>
            <td valign="top" align="center" style="border-left: none;border-right: none;">
                <b><h3>Contact us</h3></b>
                <a href="http://twitter.com" target="_blank"><img src="../Asset/twitter.png" width="30" alt="Twitter"></a>
                <a href="http://linkedin.com" target="_blank"><img src="../Asset/linkdin.png" width="30" alt="LinkedIn"></a>
                <a href="http://facebook.com" target="_blank"><img src="../Asset/images.png" width="30" alt="Facebook"></a>
                <a href="http://gmail.com" target="_blank"><img src="../Asset/gmail.png" width="30" alt="Gmail"></a>
                <a href="http://youtube.com" target="_blank"><img src="../Asset/youtube.png" width="30" alt="YouTube"></a>
            </td>
            <td valign="top" width="300px" style="border-left: none;">
                <b>About Us</b>
                <p>Welcome to X company, your premier travel management partner. With a passion for exploration and attention to detail, we offer personalized journeys to suit every traveler. From dreamy beach retreats to exhilarating mountain escapes, let us create unforgettable memories tailored just for you. Embark on your adventure today!</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" height="25px">
                &copy; <?php echo $currentYear; ?> X Company
            </td>
        </tr>
    </table>
</body>
</html>
