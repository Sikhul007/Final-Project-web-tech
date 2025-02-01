<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td form {
            display: inline;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

    </style>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        require ('model/db.php');

        // Check if form is submitted for deleting service
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_service'])) {
            $service_id = $_POST['service_id'];

            // Delete the service from the database
            $sql_delete = "DELETE FROM service WHERE service_id = $service_id";
            if (mysqli_query($conn, $sql_delete)) {
                echo "<p>Service deleted successfully.</p>";
            } else {
                echo "<p>Error deleting service: " . mysqli_error($conn) . "</p>";
            }
        }

        // Fetch and display remaining services
        $provider_id = $_GET['id'];
        $sql_services = "SELECT * FROM service WHERE provider_id = $provider_id";
        $result_services = mysqli_query($conn, $sql_services);

        if (mysqli_num_rows($result_services) > 0) {
            echo "<h2>Services for Provider ID: $provider_id</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Service ID</th><th>Service Name</th><th>Validity</th><th>Action</th></tr>";

            while ($row_service = mysqli_fetch_assoc($result_services)) {
                echo "<tr>";
                echo "<td>" . $row_service['service_id'] . "</td>";
                echo "<td>" . $row_service['service_name'] . "</td>";
                echo "<td>" . $row_service['validity'] . "</td>";
                echo "<td>";
                echo "<form method='POST' action=''>";
                echo "<input type='hidden' name='service_id' value='" . $row_service['service_id'] . "'>";
                echo "<input type='submit' name='delete_service' value='Delete'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No services found for Provider ID: $provider_id</p>";
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
