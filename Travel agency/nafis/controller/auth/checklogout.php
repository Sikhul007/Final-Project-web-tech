<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    unset($_SESSION['loginflag']);
    setcookie('stay_signed_in_cookie', '', time() - 10, '/');
    header("Location:../../view/auth/login.php");
}


?>