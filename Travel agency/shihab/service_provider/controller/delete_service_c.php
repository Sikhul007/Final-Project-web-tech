<?php 

require ('../model/db.php');
if (isset($_GET['id'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_service'])) {
        $service_id = $_POST['service_id'];
        return $service_id;
    } 

}


?>