<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $product_id = $_POST['product_id'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $customization_text = $_POST['customization_text'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO orders (name, email, product_id, size, color, customization_text, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $email, $product_id, $size, $color, $customization_text, $quantity]);

    echo "Your order has been placed successfully!";
}
?>
add