<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        form {
            text-align: center;
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        input[type="text"], input[type="number"], input[type="email"], input[type="password"] {
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #28a745;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php 
    include("../model/database.php");
    session_start();
    if(empty($_SESSION['id'])){
        header("location:Login.php");
    }
    ?>
    <?php 
    $id=$_SESSION['id'];
    $sql="select * from user where ID= $id";
    $result =mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $name = $result["Name"];
    $mail = $result["Email"];
    $pass = $result["pass"]; 
    $dob = $result["DOB"];
    $gender = $result["gender"];
    ?>
    <h1>Welcome <?php echo $name ?> </h1>
    <h3>Here is your Information</h3>
    <p>Name: <?php echo $name ?></p>
    <p>ID: <?php echo $id ?></p>
    <p>E-mail: <?php echo $mail ?></p>
    <p>Password: <?php echo $pass ?></p>
    <p>Gender: <?php echo $gender ?></p>
    <p>Date of Birth: <?php echo $dob ?></p>
    <form method="GET">
        <button name="out">Logout</button>
        <button name="edit">Edit</button>
        <button name="delete">Delete Account!</button>
    </form>
    <?php 
    if(isset($_GET["out"])){
        session_destroy();
        header("location:Login.php");
    }
    elseif(isset($_GET["delete"])){
        ?>
        <p>Are You sure?</p>
        <form method="GET">
            <button name="yes">Yes</button>
            <button name="no">No</button>
        </form>
        <?php
    }
    elseif(isset($_GET["edit"])){
    ?>
    <form method="POST" onsubmit = "return validateForm(); ">
       <label for="new_name">Enter Your New Name: </label>
       <input type="text" id="new_name" name="new_name" ><br>
       <label for="new_id">Enter Your New ID: </label>
       <input type="number" id="new_id" name="new_id" ><br>
       <label for="new_mail">Enter Your New E-mail: </label>
       <input type="email" id="new_mail" name="new_mail" ><br>
       <label for="new_pass">Enter Your New Password: </label>
       <input type="password" id="new_pass" name="new_pass" ><br>
       <input type="submit" name="save" value="Save">
    </form>
    <?php
    if(isset($_POST["save"])){
        if(empty($_POST["new_name"]) && empty($_POST["new_id"]) && empty($_POST["new_mail"]) && empty($_POST["new_pass"])){
            echo "Please Fill up what you want to Change!";
        } else {
            if(!empty($_POST["new_name"])){
                $new_name = $_POST["new_name"];
                $nameSql="UPDATE user SET Name='$new_name' WHERE ID =$id";
                mysqli_query($conn,$nameSql);
                header("location:1.php");
            }
            if(!empty($_POST["new_id"])){
               $new_id = $_POST["new_id"];
               $idSql="UPDATE user SET ID = $new_id WHERE ID =$id";
               try {
                   mysqli_query($conn,$idSql);
                   $_SESSION['id'] =$new_id;
                   header("location:1.php");
               } catch(mysqli_sql_exception) {
                   echo "ID already exists!!";
               }                  
            }
            if(!empty($_POST["new_mail"])){
               $new_mail = $_POST["new_mail"];
               $mailSql="UPDATE user SET Email ='$new_mail' WHERE ID =$id";
               mysqli_query($conn,$mailSql);
               header("location:1.php");
            }
            if(!empty($_POST["new_pass"])){
                $new_pass = $_POST["new_pass"];
               $passSql="UPDATE user SET pass ='$new_pass' WHERE ID =$id";
               mysqli_query($conn,$passSql);
               header("location:1.php");
            }
        }
    }
    }
    
    if(isset($_GET["yes"])){
            $deleteSQL ="DELETE FROM user WHERE ID =$id";
            mysqli_query($conn,$deleteSQL);
            header("location:Login.php");
    }
    ?>
    <script>
    function validateForm() {
        var nameInput = document.getElementsByName("new_name")[0].value.trim();
        var idInput = document.getElementsByName("new_id")[0].value.trim();
        var emailInput = document.getElementsByName("new_mail")[0].value.trim();
        var passInput = document.getElementsByName("new_pass")[0].value.trim();

       
        var isValid = true;

        // Name validation
        if (nameInput !== "") {
            var words = nameInput.split(" ").filter(word => word !== "");
            if (words.length < 2) {
                isValid = false;
            } else {
                for (var i = 0; i < words.length; i++) {
                    var word = words[i];
                    for (var j = 0; j < word.length; j++) {
                        var char = word[j];
                        if (!((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z') || char === '.' || char === '-')) {
                            isValid = false;
                            break;
                        }
                    }
                    if (!isValid) break;
                }
            }
        }

        // Email validation
        if (emailInput !== "") {
            var atIndex = emailInput.indexOf('@');
            var dotIndex = emailInput.lastIndexOf('.');

            if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= emailInput.length) {
                isValid = false;
            }
        }

       
        if (!isValid) {
            alert("Please enter valid name and email");
        }

        return isValid;
    }
</script>


</body>
</html>
