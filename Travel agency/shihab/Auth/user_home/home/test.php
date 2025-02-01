<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7; /* Light gray background color */
        }

        /* Header styles */
        header {
            background-color: #333; /* Dark background color for header */
            color: #fff; /* Text color */
            padding: 20px;
            text-align: center;
        }

        /* Navigation styles */
        nav {
            background-color: #444; /* Slightly lighter background color for navigation */
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff; /* Text color for navigation links */
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffd700; /* Text color on hover */
        }

        /* Main content area */
        .content {
            padding: 20px;
            text-align: center;
        }

        /* Footer styles */
        footer {
            background-color: #333; /* Dark background color for footer */
            color: #fff; /* Text color */
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel Agency</h1>
    </header>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="Auth/login.php">Registration</a></li>
            <li><a href="payment/index.php">Payment</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        <h2>Welcome to Our Travel Agency</h2>
        <p>Explore the world with us!</p>
    </div>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>
</body>
</html>
