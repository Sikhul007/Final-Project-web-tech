<?php

include("../model/database.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the selected guide is set in the form data
    if(isset($_POST["selected_guide"])) {
        $selectedGuide = $_POST["selected_guide"];
        
        // Query to retrieve selected tour guide details
        $sql = "SELECT * FROM tour_guide WHERE name = '$selectedGuide'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display selected tour guide details
            while ($row = $result->fetch_assoc()) {
                echo "<h1>Selected Tour Guide Details:</h1>";
                echo "<ul>";
                echo "<li>Name: " . $row["name"] . "</li>";
                echo "<li>Email: " . $row["email"] . "</li>";
                echo "<li>Gender: " . $row["gender"] . "</li>";
                echo "<li>Phone: " . $row["phone"] . "</li>";
                echo "</ul>";

                // Insert selected tour guide details into the database
                $insertSql = "INSERT INTO selected_tour_guides (name, email, gender, phone, ) VALUES ('" . $row["name"] . "', '" . $row["email"] . "', '" . $row["gender"] . "', '" . $row["phone"] . "')";

                if ($conn->query($insertSql) === TRUE) {
                    echo "<p>Selected tour guide details inserted successfully.</p>";
                } else {
                    echo "<p>Error: " . $insertSql . "<br>" . $conn->error . "</p>";
                }
            }
        } 
    } else {
        echo "No tour guide were selected";
    }
} 

// Close database connection
$conn->close();
?>
