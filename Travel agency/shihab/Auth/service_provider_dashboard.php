<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'] ?? 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 80vh;
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


    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    form {
        margin: 10px 0;
        width: 100%;
        max-width: 300px;
    }

    button {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
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
<header>
    <a href="../home/home.php">Home</a>
    <a href="../home/home.php#">Destinations</a>
    <a href="../home/home.php#about-us">About Us</a>
    <a href="../home/home.php#contact-us">Contact Us</a>
</header>

<body>
    <h1>Hi <?php echo htmlspecialchars($name); ?>, welcome to Service Provider dashboard</h1>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
    <form action="../profile/service_provider_profile/view/index.php" method="post">
        <button type="submit">View Profile</button>
    </form>
    <form action="../service_provider/view/profile.php" method="post">
        <button type="submit">View Service</button>
    </form>
</body>
<footer>© 2024 Travel Agency. All Rights Reserved.</footer>

</html>