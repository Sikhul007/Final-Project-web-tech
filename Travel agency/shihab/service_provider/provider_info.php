<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            padding: 12px 0;
            font-size: 24px;
            position: fixed;
            top: 0;
            width: 100%;
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

        .container {
            margin-top: 110px; /* Adjusted to push content below header */
            display: flex;
            justify-content: center;
        }

        .info-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px; 
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        button, a.button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            margin-right: 10px;
            text-decoration: none;
            margin-top: 10px;
        }

        a.button:hover {
            background-color: #838383;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 12px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <a href="../home/home.php">Home</a>
    <a href="../home/home.php#">Destinations</a>
    <a href="../home/home.php#about-us">About Us</a>
    <a href="../home/home.php#contact-us">Contact Us</a>
</header>

<div class="container">
    <div class="info-box">
        <?php
        if (isset($_GET['id'])) {
            require('model/db.php');

            $provider_id = $_GET['id'];
            $sql = "SELECT * FROM service_provider WHERE id = $provider_id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h2>Service Provider Information</h2>";
                echo "<p>ID: {$row['id']}</p>";
                echo "<p>Name: {$row['name']}</p>";
                echo "<p>Email: {$row['email']}</p>";

                // Add button for viewing services
                echo "<a href='view_service.php?id=$provider_id' class='button'>View Service</a>";

                // Add buttons for creating and deleting services
                echo "<a href='view/add_service.php?id=$provider_id' class='button'>Create Service</a>";
                echo "<a href='delete_service.php?id=$provider_id' class='button'>Delete Service</a>";
            } else {
                echo "<p>No service provider found with ID: $provider_id</p>";
            }

            mysqli_close($conn);
        }
        ?>
    </div>
</div>

<footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
