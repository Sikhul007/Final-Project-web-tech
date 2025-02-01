<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$gender = $conn->real_escape_string($_POST['gender']);
$dob = $conn->real_escape_string($_POST['dob']);
$password = $conn->real_escape_string($_POST['password']);
$rePassword = $conn->real_escape_string($_POST['re-password']);
$userType = $conn->real_escape_string($_POST['user_type']);

if ($password !== $rePassword) {
    echo "Passwords do not match.";
    exit;
}


$table = '';
switch ($userType) {
    case 'user':
        $table = 'users';
        break;
    case 'service_provider':
        $table = 'service_provider';
        break;
    case 'tour_guide':
        $table = 'tour_guide';
        break;
    case 'admin':
        $table = 'admin';
        break;
    default:
        echo "Invalid user type selected.";
        exit;
}


$sql = "INSERT INTO $table (name, email, gender, dob, password) VALUES ('$name', '$email', '$gender', '$dob', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: signin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
