<?php
include_once(__DIR__ . '/../../../dbConnect.php'); 
$conn = connectDb();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy và xử lý dữ liệu
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = floatval($_POST['price']);
    $stock_quantity = intval($_POST['stock_quantity']);
    $image_url = trim($_POST['image_url']);
    $category = trim($_POST['category']);

    $stmt = $conn->prepare("INSERT INTO products (name, description, price, stock_quantity, image_url, category)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiss", $name, $description, $price, $stock_quantity, $image_url, $category);

    if ($stmt->execute()) {
        header("Location: productlist.php?success=1");
        exit();
    } else {
        header("Location: create.php?error=1");
        exit();
    }

    $stmt->close();
} else {
    echo "❌ Phương thức không hợp lệ.";
}

$conn->close();
