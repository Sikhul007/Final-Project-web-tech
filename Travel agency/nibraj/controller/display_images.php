<?php
include 'conn.php'; 

$sql = "SELECT * FROM blog_posts WHERE 1";
if ($stmt = mysqli_prepare($conn, $sql)) {
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                
                $imageData = base64_decode($row['picture']);

                
                echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="' . $row['place_name'] . '"><br>';
                echo "<h3>" . $row['place_name'] . "</h3>";
                echo "<p>" . $row['place_details'] . "</p>";
            }
        } else {
            echo "No images found";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>