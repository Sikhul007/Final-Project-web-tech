<?php 
$conn = new mysqli("localhost", "root", "", "webtech");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>