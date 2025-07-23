<?php
include_once(__DIR__ . '/dbConnect.php');

$conn = connectDb();

$id = $_GET['id'];


$id = intval($id); 

$sql = "DELETE FROM product WHERE id = $id"; 

if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php'); 
} else {
    echo "Xoá thất bại: " . $conn->error;
}

$conn->close();
