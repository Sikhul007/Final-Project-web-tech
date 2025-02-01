<?php

require('../../model/userModel.php');

deleteDestination($_POST['id']);

header('Location:../../view/admin/adminview.php');

?>