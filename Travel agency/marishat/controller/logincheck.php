<?php
session_start();
    if(isset($_POST["login"])){
        if(!empty($_POST['id']) && !empty($_POST['pass'])){
            $id = $_POST['id'];
            $pass = $_POST['pass'];
           $sql="select * from user where ID = $id and pass = '$pass'";
           try{
            $result=mysqli_query($conn,$sql);
            if($result-> num_rows>0) {
                        $_SESSION['id']=$id;
                        header("Location:1.php");
                        exit();                                 
            }
            else
            {
                $sql2="select * from admin where ID = $id and pass = '$pass'";
                    $result=mysqli_query($conn,$sql2);
                    if($result-> num_rows>0) {
                        $_SESSION['admin'] = true;
                        header("Location: admin.php");
                            exit();
                    }
                    else{
                        echo"<br> Wrong ID/Password";
                    }
            }
            
        }
        catch(mysqli_sql_exception){
            echo "Couldn't Login";
        }
        }else{
            echo "<br> Please fill up the forms";
        }    
    }
    ?>