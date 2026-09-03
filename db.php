<?php
$conn = new mysqli("localhost", "root", "", "food_delivery");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>