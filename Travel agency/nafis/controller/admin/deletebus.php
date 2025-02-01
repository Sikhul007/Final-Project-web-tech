<?php

require('../../model/userModel.php');

deletebus($_POST['id']);
header('Location:../../view/admin/adminview.php');

?>