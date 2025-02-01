<?php
include 'conn.php'; // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $place_name = $_POST['place_name'];
    $place_details = $_POST['place_details'];

    // Image file details
    $imagePath = $_FILES['image']['tmp_name'];

    // Convert image to JPG format
    $imageJpg = imagecreatefromstring(file_get_contents($imagePath));
    ob_start();
    imagejpeg($imageJpg, null, 75); // Adjust quality as needed (0-100)
    $imageData = ob_get_clean();
    imagedestroy($imageJpg);

    // Encode the image data for storage in the database
    $imageBase64 = base64_encode($imageData);

    // Insert image data into database
    $sql = "INSERT INTO blog_posts (picture, place_name, place_details) VALUES ('$imageBase64', '$place_name', '$place_details')";
    if (mysqli_query($conn, $sql)) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
