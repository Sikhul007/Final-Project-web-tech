<?php

require('../../model/userModel.php');

        $source = $_FILES["myfile"]["tmp_name"]; 
        $destination = "../../assest/" . $_FILES["myfile"]["name"];

        //$filePath = "../../assest/" . $_FILES["myfile"]["name"];

        if (move_uploaded_file($source, $destination)) {
                changeprofilepath($destination);
                header('Location:../../view/admin/adminview.php');
        } 
        

?>
