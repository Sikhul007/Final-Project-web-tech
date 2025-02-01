<?php

require('../../model/userModel.php');

deleteplane($_POST['id']);
header('Location:../../view/admin/adminview.php');

?>