<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $email, $message]);

    echo "Thank you for contacting us! We will get back to you shortly.";

     


}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="contact-form" action="contact_form.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
    <button type="submit">Send Message</button>
    </form>
</body>
</html>
