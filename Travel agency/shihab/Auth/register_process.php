<?php
$conn = new mysqli("localhost", "root", "", "projectDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode($_POST['data'], true);
$name = $data['name'];
$password = $data['password']; 
$email = $data['email'];
$dob = $data['dob'];
$gender = $data['gender'];
$userType = $data['user_type'];

switch ($userType) {
    case 'user':
        $table = 'users';
        break;
    case 'admin':
        $table = 'admin';
        break;
    case 'service_provider':
        $table = 'service_provider';
        break;
    case 'tour_guide':
        $table = 'tour_guide';
        break;
    default:
        echo json_encode(['error' => 'Invalid user type']);
        exit();
}

$stmt = $conn->prepare("INSERT INTO $table (name, password, email, dob, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $password, $email, $dob, $gender);

if ($stmt->execute()) {
    // Fetch the last inserted ID if needed
    $lastId = $conn->insert_id;
    echo json_encode(['id' => $lastId]);
} else {
    echo json_encode(['error' => 'Failed to register user']);
}

$stmt->close();
$conn->close();
?>
