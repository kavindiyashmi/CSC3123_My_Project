<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom T-Shirt Design - Zero Y Clothing</title>
    <!-- Link to Google Fonts (for a custom font) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles.css">
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
        <!-- Custom T-Shirt Design Section -->
        <section class="hero">
            <h1>Design Your Custom T-Shirt</h1>
            <p>Choose your colors, add text, and create your perfect t-shirt!</p>
            <form action="#" method="POST">
                <!-- Form for custom t-shirt design -->
                <label for="color">Choose Color:</label>
                <select id="color" name="color">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>

                <label for="text">Add Text:</label>
                <input type="text" id="text" name="text" placeholder="Enter your text here">

                <button type="submit">Create Design</button>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Zero Y Clothing | All Rights Reserved</p>
    </footer>

</body>
</html>
