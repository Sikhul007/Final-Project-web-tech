<?php 
if(isset($_GET["out"])){
        header("location:Login.php");
        $_SESSION['admin'] =false;
    }

    if(isset($_POST["delete"])){
        $id= $_POST["delete"];
        $deleteSQL ="DELETE FROM user WHERE ID =$id";
        mysqli_query($conn,$deleteSQL);
        header("location:admin.php");
    }
    ?>