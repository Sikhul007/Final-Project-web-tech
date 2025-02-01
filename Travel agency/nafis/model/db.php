<?php 

    $host = "localhost";
    $dbname = "projectDB";
    $dbuser = "root";
    $dbpass = "";

    function dbConnection(){
        global $host;
        global $dbname;
        global $dbuser;
        global $dbpass;

        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;
        
    }

?>
