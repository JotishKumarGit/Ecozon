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
    <div class="container-fluid">
        <div class="bg-sec">
            <div class="banner_text">
                <h1 class="display-2 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
                    About Us</h1>
            </div>
        </div>
    </div>
    </div>


    <!-- About us section -->

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center" style="font-size: 21px; letter-spacing: 2px; color: #8aae4a;">At Ecozon, we believe in the power of sustainable business to transform communities and protect our planet. Founded by a dedicated women ecopreneur, our mission is to create a positive impact by focusing on three core principles: </p>
                </div>
            </div>
        </div>
    </div>


    <div class="pb-5 ">
        <div class="container-fluid" style="border: 50px solid #8aae4a">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <h2 class="" style="font-size: 30px; font-weight:500;">Empowering Communities</h2>
                        <p>We partner with rural women and self-help groups, providing them with opportunities for employment and skill development. </p>
                        <p>By sourcing and manufacturing products in collaboration with these communities, we aim to enhance the living standards and promote self-reliance.</p>
                        <div class="read-btn py-3">
                            <button class="read-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img src="image/about-1.webp" alt="" height="auto" width="100%" class="" style="border: 1px solid #82b672;">
                    </div>
                </div>
                <div class="row align-items-center py-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img src="image/about-2.webp" alt="" height="auto" width="100%" style="border: 1px solid #82b672;">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <h2 class="" style="font-size: 30px; font-weight:500;">Save the Planet</h2>
                        <p>We are committed to a zero-waste lifestyle. Our eco-friendly practices extend from product design to packaging, ensuring that every step we take minimizes environmental impact.
                        </p>
                        <p>Join us in the journey towards a greener, cleaner Earth.</p>
                        <div class="read-btn py-3">
                            <button class="read-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</button>
                        </div>
                    </div>

                </div>
                <div class="row align-items-center py-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <h2 class="" style="font-size: 30px; font-weight:500;">Scale with Purpose</h2>
                        <p>As we grow, we do so with a strong commitment to social responsibility.</p>
                        <p>We continually strive to improve the sustainability of our business operations, ensuring that our growth positively influences both society and the environment.</p>
                        <div class="read-btn py-3">
                            <button class="read-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <img src="image/about-3.webp" alt="" height="auto" width="100%" style="border: 1px solid #82b672;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This is for enquiry -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome To Ecozon 
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 my-2">
                            <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                        </div>
                        <div class="col-12 col-md-6 my-2">
                            <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                        </div>
                        <div class="col-12  my-2">
                            <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </button>

    <!-- This is for enquiry -->
    <script>
        function go() {
            var name = document.querySelector(".name").value;
            var email = document.querySelector(".email").value;
            var number = document.querySelector(".number").value;
            var url = "https://wa.me/91XXXXXX?text=" +
                "Name: " +
                name + " " +
                "Number: " +
                number + " " +
                "Email :" + email;
            window.open(url, "_blank").focus();
        }
    </script>

    <?php
    include('footer.php');

    ?>