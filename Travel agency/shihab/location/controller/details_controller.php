<?php

session_start();
if (isset($_SESSION['flag'])) {
    header('Location: ../view/index.php');
    exit;
}

include '../view/details.php';
?>
