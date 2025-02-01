<?php

require('../../model/userModel.php');

deletepackage($_POST['id']);
header('Location:../../view/admin/adminview.php');

?>