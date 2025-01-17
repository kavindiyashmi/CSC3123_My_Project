<?php

$host = '127.0.0.1'; 
$db = 'Zero_Clothing'; 
$user = 'root';      
$pass = 'mariadb';          

try {
  
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    die("Could not connect to the database $db: " . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            
            $query = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $pdo->prepare($query);

            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            
            $stmt->execute();

            
            echo "Thank you for contacting us! We will get back to you soon.";
        } catch (PDOException $e) {
            
            echo "Error: " . $e->getMessage();
        }
    }
        echo "All fields are required.";
    }
}
?>


 
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Zero Y Clothing</title>
    <!-- Link to Google Fonts (for a custom font) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        /* Reset and box-sizing */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            color: #333;
            line-height: 1.6;
        }

        /* Header Styling */
        header {
            background: url('your-header-background-image.jpg') no-repeat center center/cover; /* Background image for header */
            color: white;
            padding: 80px 0; /* Adjust padding to make space for text */
            text-align: center;
            position: relative;
        }

        /* Overlay Effect for Header Text */
        header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: -1;
        }

        header nav ul {
            list-style: none;
            text-align: center;
        }

        header nav ul li {
            display: inline;
            margin: 0 30px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
            text-transform: uppercase;
        }

        header nav ul li a:hover {
            color: #ffcc00;
        }

        /* Contact Section Styling */
        .contact-section {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
            margin-top: -50px;
            z-index: 10;
        }

        .contact-section h2 {
            font-size: 3em;
            color: #ff6a00;
            margin-bottom: 20px;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .contact-form button {
            padding: 12px 30px;
            background-color: #ffcc00;
            color: #333;
            font-size: 1.2em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #ff6a00;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 1.1em;
        }

        footer p {
            margin-top: 10px;
        }

        /* Section Styling for General Consistency */
        section {
            padding: 50px 20px;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="custom-design.php">Custom T-Shirts</a></li>
                <li><a href="#dresses-collection">Dresses Collection</a></li>
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Contact Section -->
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, feel free to reach out to us. We're here to help!</p>

            <!-- Contact Form -->
            <form class="contact-form" action="contact-us.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
    <button type="submit">Send Message</button>
</form>

        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Zero Y Clothing | All Rights Reserved</p>
    </footer>

</body>
</html>
