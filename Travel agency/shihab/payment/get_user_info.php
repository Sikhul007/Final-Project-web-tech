<?php
require ('model/db.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT NAME, AMOUNT FROM payment WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "No user found with that ID.";
    }
} else {
    echo "ID parameter not provided.";
}

$conn->close();
?>
