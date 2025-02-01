<?php
$conn = new mysqli("localhost", "root", "", "projectDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}