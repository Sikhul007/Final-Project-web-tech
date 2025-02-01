<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    require ('model/db.php');

    if (isset($_GET['id'])) {
        $provider_id = $_GET['id'];

        $sql = "SELECT * FROM service WHERE provider_id = '$provider_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Services for Provider ID: $provider_id</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Service ID</th><th>Service Name</th><th>Validity</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['service_id'] . "</td>";
                echo "<td>" . $row['service_name'] . "</td>";
                echo "<td>" . $row['validity'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No services found for Provider ID: $provider_id";
        }
    } else {
        echo "Provider ID is not set";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
