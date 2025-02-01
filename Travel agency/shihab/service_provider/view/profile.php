<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Service Provider ID</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        main {
            /* padding: 20px; */
            flex-grow: 1;
            /* Takes up remaining space */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 60px;
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



        h1 {
            text-align: center;
            margin-top: 100px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
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
        <a href="../../home/home.php">Home</a>
        <a href="../../home/home.php#">Destinations</a>
        <a href="../../home/home.php#about-us">About Us</a>
        <a href="../../home/home.php#contact-us">Contact Us</a>
    </header>
    <h1>Enter Service Provider ID</h1>
    <form action="../provider_info.php" method="GET" onsubmit="return validateForm()">
        <label for="provider_id">Provider ID:</label><br>
        <input type="text" id="provider_id" name="id"><br>
        <input type="submit" value="Show Profile">
    </form>

    <script>
        function validateForm() {
            var userId = document.getElementById('provider_id').value;

            if (userId.trim() === '' || parseInt(userId) <= 0 || isNaN(parseInt(userId))) {
                alert('Provider ID cannot be empty and must be a positive number.');
                return false;
            }
            return true;
        }
    </script>

<footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
