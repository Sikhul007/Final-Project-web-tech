<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe = isset($_POST['remember_me']);

$tables = ['users', 'service_provider', 'tour_guide', 'admin'];
$found = false;

foreach ($tables as $table) {
    $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $found = true;
        $user = $result->fetch_assoc();

        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['user_type'] = $table;

        if ($rememberMe) {
            setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('password', $password, time() + (86400 * 30), "/");
        }

        switch ($table) {
            case 'users':
                header("Location: user_home/home/home.php");
                break;
            case 'admin':
                header("Location: ../../nafis/view/admin/adminview.php");
                break;
            case 'service_provider':
                header("Location: service_provider_dashboard.php");
                break;
            case 'tour_guide':
                header("Location: tour_guide_dashboard.php");
                break;
        }
        exit;
    }
}

if (!$found) {
    echo "Invalid Email or Password!!!.";
}

$conn->close();
