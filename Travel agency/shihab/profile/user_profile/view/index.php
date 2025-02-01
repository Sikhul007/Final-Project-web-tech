<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 150px;
            align-content: center;
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
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #838383; 
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 12px 12px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
        <script>
        function validateForm() {
            var userId = document.getElementById('userId').value;

            if (userId.trim() === '' || parseInt(userId) <= 0 || isNaN(parseInt(userId))) {
                alert('User ID cannot be empty and must be a positive number.');
                return false;
            }
            return true;
        }
    </script>
</head>

<header>
    <a href="../../home/home.php">Home</a>
    <a href="../../home/#hero">Destinations</a>
    <a href="../../home/#about-us">About Us</a>
    <a href="../../home/#contact-us">Contact Us</a>
</header>
<body>
    <h2>Enter User ID to Show Your Information</h2>
    <form action="get_user_info.php" method="POST" onsubmit="return validateForm()">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId">
        <button type="submit">Get Info</button>
    </form>
</body>
<footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</html>
