<!DOCTYPE html>
<html>
<head>
    <title>Display Contact Info</title>
    <link rel="stylesheet" href="../asset/display Info.css"/>
</head>
<body>
    <h2>Contact Information</h2>
    <div class="contact-info">
        <?php
           
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
        ?>
    </div>
</body>
</html>
