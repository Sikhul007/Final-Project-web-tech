<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .view-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            margin-left: 10px;
        }

        .view-button:hover {
            background-color: #838383;
        }
    </style>
</body>

</html>



<?php
require('model/db.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = mysqli_real_escape_string($conn, $_POST['service_name']);
    $validity_start = $_POST['validity_start'];
    $validity_end = $_POST['validity_end'];
    $provider_id = $_POST['provider_id'];

    // Combine start and end dates into a single string
    $validity = $validity_start . ' - ' . $validity_end;

    // Insert data into service table
    $sql = "INSERT INTO service (provider_id, service_name, validity) VALUES ('$provider_id', '$service_name', '$validity')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='success-message'>Service added successfully. <a href='view_service.php?id=$provider_id' class='view-button'>View Service</a></div>";
    } else {
        echo "<div class='error-message'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }
}

mysqli_close($conn);
?>