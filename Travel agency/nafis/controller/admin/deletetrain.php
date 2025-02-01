<?php

require('../../model/userModel.php');

deletetrain($_POST['id']);
header('Location:../../view/admin/adminview.php');

?>