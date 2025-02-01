<?php

require('../../model/userModel.php');

deleteuser($_POST['userid']);
header('Location:../../view/admin/adminview.php');

?>