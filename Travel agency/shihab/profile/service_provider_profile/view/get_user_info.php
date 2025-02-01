<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 85px;
        }

        header {
            background-color: #333;
            color: #fff;
            width: 100%;
            padding: 12px 0;
            font-size: 24px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        header a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #ff6600;
        }

        .profile-container {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .profile-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            overflow: hidden;
        }

        .profile-box p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        .profile-box img {
            float: right;
            margin-top: 10px;
            border: 2px solid #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 100px;
            height: 100px;
            margin-left: 10px;
        }

        .profile-name {
            font-size: 18px;
            font-weight: bold;
            float: right;
            clear: right;
            margin-top: 10px;
        }

        /* Button styles */
        .profile-box form input[type="submit"] {
            width: 200px;
            padding: 8px 16px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #333; /* Button background color */
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s; /* Transition effect for hover */
        }

        .profile-box form input[type="submit"]:hover {
            background-color: #838383; /* Button background color on hover */
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 12px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<header>
    <a href="../../home/home.php">Home</a>
    <a href="../../home/#hero">Destinations</a>
    <a href="../../home/#about-us">About Us</a>
    <a href="../../home/#contact-us">Contact Us</a>
</header>
<body>
    <div class="profile-container">
        <div class="profile-box">
            <?php
            require_once('../model/db1.php');

            // Retrieving user information based on the provided ID
            if (isset($_POST['userId'])) {
                $userId = $_POST['userId'];
                
                $sql = "SELECT * FROM service_provider WHERE id = $userId";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<img src='../asset/{$row['picture']}' alt='Profile Picture'>";
                        echo "<p class='profile-name'><strong>" . $row["name"] . "</strong></p>";
                        echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
                        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                        echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
                        echo "<p><strong>Date of Birth:</strong> " . $row["dob"] . "</p>";
                        echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
                        // Edit button
                        echo "<form action='../controller/edit.php' method='get'>";
                        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                        echo "<input type='submit' value='Edit Profile'>";
                        echo "</form>";
                        // Change password button
                        echo "<form action='../controller/change_pass.php' method='post'>";
                        echo "<input type='hidden' name='userId' value='" . $row['id'] . "'>";
                        echo "<input type='submit' value='Change Password'>";
                        echo "</form>";
                    }
                } else {
                    echo "No user found with ID: $userId";
                }
            } else {
                echo "Please provide a user ID";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
