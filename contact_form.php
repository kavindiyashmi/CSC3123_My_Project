<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $email, $message]);

    echo "Thank you for contacting us! We will get back to you shortly.";
}
?>
