<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
   
    <link rel="stylesheet" href="../asset/forget pass.css"/>


</head>
<body>
    <h3>Change Your Password</h3>
    <?php 
     include("../model/database.php");
    ?>
    <form method="POST">
        Enter your E-mail: <br>
        <input type="email" name="mail"> <br> <br>
        <?php 
            if(isset($_POST["check"])){
                session_start();
                $mail = $_POST['mail'];
                $_SESSION['mail'] = $mail;
                $sql = "select * from user where Email = '$mail'";
                try {
                    $result = mysqli_query($conn, $sql);
                    if($result->num_rows > 0) { ?>
                        Enter your new password: <br>
                        <input type="password" name="pass"> <br> 
                        Re-type your new password: <br>
                        <input type="password" name="Rpass"> <br> <br>
                        <input type="submit" name="chng" value="Change Password">
                        <?php   
                    } else {
                        echo "<div class='error-message'>Couldn't find user</div>";
                    }
                } catch(mysqli_sql_exception $e) {
                    echo "<div class='error-message'>Couldn't find user</div>";
                }
            }
        ?>
        <input type="submit" name="check" value="Check">
        <input type="submit" name="login" value="Login">
    </form>
    <?php 
    if(isset($_POST["chng"])){
        if(!empty($_POST['pass']) && !empty($_POST['Rpass'])){
            $npass = $_POST['pass'];
            $Rnpass = $_POST['Rpass'];
            if($npass == $Rnpass){
                session_start();
                $mail = $_SESSION['mail'];
                $passSql = "UPDATE user SET pass ='$npass' WHERE Email ='$mail'";
                mysqli_query($conn, $passSql);
                echo "<div class='message'>Password Changed!</div>";
            } else {
                echo "<div class='error-message'>Password mismatched</div>";
            }
        } else {
            echo "<div class='error-message'>Please fill up both password fields</div>";
        } 
    }
    if(isset($_POST["login"])){
        header("location:Login.php");
    }               
    ?>
</body>
</html>
