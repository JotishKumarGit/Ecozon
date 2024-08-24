<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wholesale</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* This is for baner */
        .bg-sec {
            background-image: linear-gradient(rgba(0, 0, 0, 0.295), rgba(0, 0, 0, 0.253)), url(image/banner.jpg);
            height: 30vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>

    <?php
    include('database/db.php');
    include('header.php');

    ?>

    <div class="bg-sec">
        <div class="banner_text">
            <h1 class="display-2 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
                Wholesale</h1>
        </div>
    </div>
    </div>

    <!-- start section  -->

    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-md-12 col-12 mb-5">
                    <h2 class="py-2">Elevate Your Business with Sustainable Style</h2>
                    <p class="py-2">We are excited to offer our eco-friendly alternatives to businesses looking for high-quality, biodegradable, and stylish solutions</p>
                    <div class="read-btn">
                    <button><a href="contact.php" class="text-decoration-none text-white">Read More</a></button>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                    <img src="image/8.webp" alt="" height="auto" width="100%" style="border: 1px solid #82b672; border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>

    <!-- This is for card -->

    <div class="section py-5">
        <div class="container">
            <div class="text py-5">
                <h2 class="text-center">Why Choose Areca Palm Leaf Tableware?</h2>
            </div>
            <div class="row h-100">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="card-f h-100">
                        <img src="image/icon-2.png" alt="">
                        <h2> Eco-Friendly Excellence</h2>

                        <p>Our plates are crafted from fallen areca palm leaves, making them a sustainable and renewable resource. By choosing our products, your business is contributing to a greener planet.</p>
                        <br>
                        <div class="read-btn">
                        <button><a href="contact.php" class="text-decoration-none text-white">Read More</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="card-f h-100">
                        <img src="image/icon-1.png" alt="">
                        <h2>Elegance and Durability</h2>
                        <p>The natural and rustic appearance of our palm leaf tableware adds a touch of sophistication to any event. Despite their lightweight feel, these tableware are sturdy and reliable, making them ideal for various catering occasions.</p>
                        <br>
                        <div class="read-btn">
                        <button><a href="contact.php" class="text-decoration-none text-white">Read More</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="card-f h-100">
                        <img src="image/icon-3.png" alt="">
                        <br><br>
                        <h2> Versatility</h2>
                        <br>
                        <p>Whether you're serving appetizers, entrees, or desserts, our plates come in various sizes to meet your business's diverse needs. From casual gatherings to formal events, our tableware seamlessly blend into any setting.</p> <br>
                        <div class="read-btn">
                        <button><a href="contact.php" class="text-decoration-none text-white">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This is Explore section -->

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12 col-12 mb-5">
                    <img src="image/10.webp" alt="" height="auto" width="100%" style="border: 1px solid #82b672; border-radius: 10px;">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                    <h2>Explore the Possibilities</h2>
                    <p>Discover a world of options with our diverse shapes and sizes, ranging up to 55 inches, in our eco-friendly areca palm leaf tableware collection. Elevate your presentation and access exclusive bulk pricing for sustainable style.</p>
                    <h3 class="" style="font-weight: 400; color: #000;">Experience the Quality:</h3>
                    <p>If you'd like to experience the quality of our products firsthand, we're delighted to ship a sample set to you within the next 24 hours.</p>
                    <h3 class="" style="font-weight: 400; color: #000;">Unlock Sustainable Savings:</h3>
                    <p>Take the eco-conscious route and explore our exclusive bulk pricing. Simply fill out the form below to get started. Choose Ecozon for unmatched eco-friendly elegance.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- This is contact us for wholesale section  -->

    <div class="py-5">
        <div class="contact-form-container">
            <h1 class="text-center mb-4">Contact Us</h1>
            <form>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                </div>
                <div class="read-btn text-center">
                    <button type="submit" class="px-5 py-2">Send</button>
                </div>
            </form>
        </div>
    </div>








    <?php
    include('footer.php');

    ?>