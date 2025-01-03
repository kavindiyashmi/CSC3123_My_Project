<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Y Clothing</title> 

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
            color: rgb(95, 6, 6);
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
            padding: 10px;
            margin-top: 20px;
        }

        header nav ul li {
            display: inline;
            margin: 0 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
            text-transform: uppercase;
            padding: 10px 15px;
        }

        header nav ul li a:hover {
            color: #ffcc00;
            background-color: rgba(0, 0, 0, 0.3); /* Add background on hover */
            border-radius: 5px;
        }

        /* Hero Section Styling */
        .hero {
            text-align: center;
            padding: 120px 20px;
            background-image: url('images/hero-background.jpg'); /* Background image for hero section */
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
        }

        /* Header Title Styling */
        .hero h1 {
            font-family: 'Montserrat', sans-serif; /* Change to custom font */
            font-size: 5em;
            margin-bottom: 20px;
            color: #ffcc00;
        }

        .hero p {
            font-size: 1.5em;
            margin-bottom: 30px;
        }

        .cta-button {
            padding: 15px 30px;
            background-color: #ffcc00; /* Button color */
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            background-color: #ff6a00; /* Hover effect */
        }

        /* Dresses Collection Section */
        #dresses-collection {
            padding: 50px 20px;
            background-color: #ffffff;
            text-align: center;
        }

        #dresses-collection h2 {
            font-size: 3em;
            color: #ff6a00;
            margin-bottom: 20px;
        }

        #dresses-collection p {
            font-size: 1.3em;
            color: #555;
            margin-bottom: 30px;
        }

        #dresses-collection img {
            width: 100%;
            max-width: 350px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Additional Images Section for Custom T-Shirts */
        .more-images {
            text-align: center; /* Center the text */
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .more-images img {
            width: 100%;
            max-width: 350px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        /* Media Queries for responsiveness */
        @media (max-width: 768px) {
            .hero {
                padding: 80px 20px;
            }

            .hero h1 {
                font-size: 2.5em;
            }

            .hero p {
                font-size: 1.2em;
            }

            .cta-button {
                font-size: 1em;
                padding: 12px 20px;
            }

            .about h2 {
                font-size: 2.5em;
            }

            .about p {
                font-size: 1.1em;
            }

            .about-image {
                width: 100%;
            }

            .more-images img {
                max-width: 100%;
            }
            /* About Us Section */
.about {
    padding: 100px 20px;
    background-color: #ffb3b3;
    text-align: center; /* Center text */
    display: flex;
    flex-direction: column; /* Arrange text and image in column */
    align-items: center; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
}

.about h2 {
    font-size: 2.5em;
    color: #ff6a00;
    margin-bottom: 20px;
}

.about p {
    font-size: 1.2em;
    color: #6b0404;
    margin-bottom: 20px;
    max-width: 800px; /* Limit text width for better readability */
}

.about-image {
    width: 100%;
    max-width: 500px; /* Set a maximum width for the image */
    margin-top: 20px;
    border-radius: 8px;
}

        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="custom-design.html">Custom T-Shirts</a></li>
                <li><a href="#dresses-collection">Dresses Collection</a></li> <!-- Link to Dresses Collection -->
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section with background image -->
        <section class="hero">
            <h1>Zero Y Clothing</h1>
            <p>Discover personalized clothing & custom t-shirt designs that express your unique style.</p>
            <a href="custom-design.html" class="cta-button">Create Your Design</a>
        </section>

        <!-- Dresses Collection Section -->
        <section id="dresses-collection" class="more-images">
            <h2>Our Dress Collection</h2>
            <p>Explore our elegant collection of dresses designed to make you stand out in any occasion.</p>
            <div>
                <!-- External Dress Image 1 -->
                <img src="https://i.pinimg.com/736x/9a/41/00/9a41004aed507ff48d94daa86afbe622.jpg" alt="Maxi Dress">
                <!-- External Dress Image 2 -->
                <img src="https://i.pinimg.com/736x/9a/87/c9/9a87c9875711721e70a41ddacf401c49.jpg" alt="Elegant Dress 2">
                <!-- External Dress Image 3 -->
                <img src="https://img.ltwebstatic.com/images3_pi/2023/06/09/1686278192ab01bf054218d0c659fe888711627941_thumbnail_720x.jpg" alt="Elegant Dress 3">
            </div>
        </section>

        <!-- Additional Images Section for Custom T-Shirts -->
        <section class="more-images">
            <h2>Creative Custom T-Shirt Designs</h2>
            <div>
                <!-- Example of another image in the collection -->
                <img src="https://i5.walmartimages.com/seo/Fashion-Summer-Womens-T-shirt-Sparkle-Butterfly-Printed-Short-Sleeve-Tees-Funny-Graphic-Shirts-Casual-Pullover-Tops_b21d1503-90ce-4169-ac23-9a763177366e.0ae09583eac9f4b7f842ec59b11964a4.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="Custom T-Shirt 1">
                <!-- Example of another image in the collection -->
                <img src="https://www.yourprint.in/new-admin-ajax.php?action=resize_outer_image&cfcache=all&url=https%3A%2F%2Fyp-media.s3.amazonaws.com%2FDesigns_Inners_and_Outers%2FTshirts%2FWomen%2Ftshirt_hs_oversized_women_pat_d90_o.jpg&resizeTo=450" alt="Custom T-Shirt 2 ">

            </div>
        </section>
    </main>

     
     <!-- About Us Section -->
<section class="about">
    <h2>About Us</h2>
    <p>At Zero Y Clothing, we offer a range of personalized dresses and custom t-shirts, helping you express your individuality through fashion. Join us to create one-of-a-kind pieces tailored to your style.</p>
    <!-- Base64 Image -->
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfXkkUYT5yxgLe9hcwg0yCYjC0uunzKNPr9w&s" class="about-image">
</section>


    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Zero Y Clothing | All Rights Reserved</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>



