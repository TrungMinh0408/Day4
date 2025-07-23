<?php
include 'dbConnect.php'; 

$conn = connectDb();


$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image_url = $_POST['image_url'];

$sql = "INSERT INTO product (name, price, category, image_url) 
        VALUES ('$name', '$price', '$category', '$image_url')";

if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php'); 
    exit;
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
