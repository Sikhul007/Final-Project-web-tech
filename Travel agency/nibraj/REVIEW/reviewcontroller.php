<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    $errors = [];

    // Check if name is provided and not empty
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    }

    // Check if email is provided and in valid format
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Check if rating is provided
    if (empty($_POST["rating"])) {
        $errors[] = "Please select a rating";
    }

    // Check if review is provided and not empty
    if (empty($_POST["review"])) {
        $errors[] = "Review is required";
    }

    // If there are no errors, process the review
    if (empty($errors)) {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $rating = $_POST["rating"];
        $review = $_POST["review"];

        // Here, you can insert the review into your database or perform any other actions

        // For demonstration, let's just echo the review details
        echo "Thank you for your review!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Rating: $rating<br>";
        echo "Review: $review<br>";
    } else {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    // If the form is not submitted via POST, redirect or handle as needed
    echo "Form submission method not allowed";
}
?>
