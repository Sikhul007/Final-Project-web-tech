<?php
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "tms"; // Change this to your MySQL database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Specify the image file path
$imagePath = 'C:/xampp/htdocs/travel_agency/assets/1.jpg';

// Check if the file exists
if (file_exists($imagePath)) {
    // Read the image file
    $imageData = file_get_contents($imagePath);

    // Convert the image data into base64 format
    $base64Image = base64_encode($imageData);


    $sql = "INSERT INTO blog_posts (picture, place_name, place_details) VALUES ('$base64Image', 'Example Place', 'Example Place Details')";
//     if (mysqli_query($conn, $sql)) {
//         echo "Image uploaded successfully!";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
// } else {
//     echo "File does not exist!";
}
?>
