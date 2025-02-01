<?php 
   $server ="localhost";
   $userName="root";  // database username
   $pass="";  //  database password
   $db_Name="projectDB"; //  database name


   try{
        $conn = mysqli_connect("$server","$userName","$pass","$db_Name");
   }
   catch(mysqli_sql_exception){
        echo"Database Couldn't Connect! <br>";
   }
?>
