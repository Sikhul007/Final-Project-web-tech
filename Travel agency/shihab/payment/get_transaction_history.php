<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h2 {
            color: #444;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #eef;
        }
        button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 0;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
session_start();
$id = $_SESSION['$id'];
require ('model/db.php');
$sql = "SELECT * FROM transaction_history WHERE ID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Transaction History</h2>";
    echo "<table>";
    echo "<tr><th>Transaction ID</th><th>Payment Date</th><th>Payment Method</th><th>Amount</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        // echo "<td>" . $row["ID"] . "</td>";
        // echo "<td>" . $row["NAME"] . "</td>";
        // echo "<td>" . $row["tour_id"] . "</td>";
        echo "<td>" . $row["transaction_id"] . "</td>";
        echo "<td>" . $row["payment_date"] . "</td>";
        echo "<td>" . $row["payment_method"] . "</td>";
        echo "<td>" . $row["AMOUNT"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No transaction history found.";
}

$conn->close();
?>

<form action="../Auth/user_home/home/home.php" method="get">
    <button type="submit">Back to Home</button>
</form>

</body>
</html>
