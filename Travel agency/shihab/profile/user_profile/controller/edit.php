<?php
require_once('../model/db1.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $picture = $_FILES['picture']['name']; 
    $picture_temp = $_FILES['picture']['tmp_name']; 
    
    // If a picture is uploaded, move it to the "asset" folder and overwrite the existing one
    if (!empty($picture)) {
        move_uploaded_file($picture_temp, "../asset/" . $picture);
    }
    
    // Update user information in the database
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', dob='$dob', gender='$gender', picture='$picture' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        echo "<form action='../view/index.php'>";
        echo "<button type='submit'>Back to Home</button>";
        echo "</form>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve user information based on the provided ID
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    $sql = "SELECT * FROM users WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        include ('../view/edit_v.php');
?>

<?php
    } else {
        echo "No user found with ID: $userId";
    }
} else {
    //echo "Please provide a user ID";
}

$conn->close();
?>
