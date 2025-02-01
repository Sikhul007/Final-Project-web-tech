<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1, h3 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            border-top: 1px solid #ddd;
            border-bottom: 2px solid #333;
        }
        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php 
    include("../model/database.php");
    session_start();
    if(!($_SESSION['admin'])){
        header("location:Login.php");
    }
    ?>
    <h1>Welcome Admin!</h1>
    <h3>Registration User Details:</h3>
    <?php 
    $sql="select * from user"; 
    $result = mysqli_query($conn,$sql)
    ?>

    <form method="POST">      
        <table border="1">
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>E-mail</th>
               <th>Password</th>
               <th colspan="2">Option</th>
           </tr>
           <?php while($r=mysqli_fetch_assoc($result)){ ?>
           <tr>
                <td><?php echo $r["ID"]; ?></td>
                <td><?php echo $r["Name"]; ?></td>
                <td><?php echo $r["Email"]; ?></td>
                <td><?php echo $r["pass"]; ?></td>
                <td><button name="delete" value="<?php echo $r["ID"]; ?>">Delete</button></td>
           </tr>
           <?php } ?>
        </table>
    </form>

    <form>
        <br>
        <button name="out">Logout</button>
    </form>
    <?php 
    include("../controller/admincheck.php");
    ?>
   
</body>
</html>
