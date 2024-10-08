<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecozon - Navbar with Dropdown</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .my_box {
            display: flex;
        }

        a,
        li {
            list-style: none;
            text-decoration: none;
        }

        .ul {
            display: flex;
        }

        .ul>li {
            padding: 10px;
        }

        .space {
            letter-spacing: 1px;
            font-size: 13px;
        }

        .text-dark {
            color: #4d4d4d !important;
        }

        .ul>li {
            text-decoration: none;
            transition: 4s;
        }

        .ul>li:hover {
            text-decoration: underline;
        }

        .bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.295), rgba(0, 0, 0, 0.253)), url(image/banner.jpg);
            height: 50vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hover_button>button {
            border: none;
            background-color: #417505;
            padding: 10px 35px 10px 35px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
        }

        .box_button>button {
            border: none;
            background-color: #ffffff;
            padding: 10px 35px 10px 35px;
            border-radius: 25px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
        }

        .box_button>button:hover {
            border: none;
            background-color: #00968f;
            padding: 10px 35px 10px 35px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
        }

        .hover_button>button:hover {

            background-color: #05850c;


        }

        .b {
            background-image: linear-gradient(rgba(0, 0, 0, 0.137), rgba(0, 0, 0, 0.205)), url("image/bwl.webp");
            height: 100%;
            width: 100%;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .c {
            background-image: linear-gradient(rgba(0, 0, 0, 0.137), rgba(0, 0, 0, 0.205)), url("image/2.jpg");
            height: 100%;
            width: 100%;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .d {
            background-image: linear-gradient(rgba(0, 0, 0, 0.137), rgba(0, 0, 0, 0.205)), url("image/spn.webp");
            height: 100%;
            width: 100%;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .banner2 {
            background-image: url("image/img-8.webp");
            height: 60vh;
            background-size: cover;
            display: flex;
            background-position: center;
            justify-content: center;
            align-items: end;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    include('database/db.php');
    include('header.php');

    ?>

    <!--  This is background image -->
    <div class="bg">
        <div class="banner_text">
            <h1 class="display-2 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
                ECOZON</h1>
            <h2 style="word-spacing: 2px;">Green choices Blue skies</h2>
            <div class="hover_button my-5">
            <button><a href="catalog.php" class="text-decoration-none text-white">Shop All</a></button>
            </div>
        </div>
    </div>

    <!-- This is section  -->
    <div class="py-5 background" style="background-color: #f6f5f5;">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="text-center">
                            <img src="image/img-1.webp" alt="" height="100px" width="100px">
                        </div>
                        <h3 class="py-4 text-center" style="color: #393939; font-size:22px; font-weight:500;">Elegant &
                            Sturdy</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="text-center">
                            <img src="image/img-2.webp" alt="" height="100px" width="100px">
                        </div>
                        <h3 class="py-4 text-center" style="color: #393939; font-size:22px; font-weight:500;">100%
                            Natural</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="text-center">
                            <img src="image/img-3.webp" alt="" height="100px" width="100px">
                        </div>
                        <h3 class="py-4 text-center" style="color: #393939; font-size:22px; font-weight:500;">
                            Compostable</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="text-center">
                            <img src="image/img-4.webp" alt="" height="100px" width="100px">
                        </div>
                        <h3 class="py-4 text-center" style="color: #393939; font-size:22px; font-weight:500;">Zero Waste
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why choose us? -->

    <div class="py-5 background">
        <div class="container-fluid">

            <div class="">
                <h2 class="text-center fs-1" style="color: #222222; font-size:22px; letter-spacing: 3px;"><b>WHY CHOOSE
                        US?</b></h2>
                <p class="text-center p-0  m-0">At Ecozon, we are commited to a greener, more sustainable future.</p>
                <p class="text-center p-0  m-0">From the heart of nature to your hands, every</p>
                <p class="text-center p-0  m-0"> product embodies our pledge to a zero-waste philosophy. It's</p>
                <p class="text-center p-0  m-0">about adopting a lifestyle where every green choice is a contribution to
                    a cleaner, healthier world. </p>
            </div>
            <div class="container ">
                <div class="row py-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="text-center">
                            <img src="image/img-5.webp" alt="" height="210px" width="210px">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="py-2" style="color: #000000; font-size:24px; font-weight:400; ">THRIVING
                                COMMUNITIES</h2>
                            <p class="" style="color: #777777; ">We strive to create thriving communities by partnering
                                with rural women and self-help groups, empowering them through employment opportunities
                                and promoting a self-reliant lifestyle.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="text-center ">
                            <img src="image/img-6.webp" alt="" height="210px" width="210px">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="py-2" style="color: #000000; font-size:24px; font-weight:400;">SAVE THE PLANET
                            </h2>
                            <p class="py-2" style="color: #777777; ">Our commitment extends to the planet we call home.
                                We've embraced a zero-waste lifestyle, working diligently to minimize our environmental
                                impact. </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="text-center ">
                            <img src="image/img-7.webp" alt="" height="210px" width="210px">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="py-2" style="color: #000000; font-size:24px; font-weight:400;">SCALE WITH PURPOSE
                            </h2>
                            <p class="" style="color: #777777; ">As we grow, so does our commitment to a socially
                                responsible business model. We aim to improve the sustainability of our operations,
                                ensuring that every step we take contributes positively to society. Join us in our
                                journey towards a better, eco-friendly future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content   -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h2 class="text-center pb-4" style=""><b>We are also available at</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div>
                        <img src="image/amazon-logo.webp" alt="" height="130px" width="230px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-4">
        <div class="head">
            <h2 class="text-center" style="padding-bottom: 15px; font-size: 37px; color: #393939; letter-spacing: 2px;">
                Explore Our Sustainable Products</h2>
            <p class="text-center" style="">Browse through our collection of ethically sourced and manufactured
                products. Every purchase you make
                supports our mission and contributes to the well-being of the communities we work with.​</p>
        </div>
        <div class="row">
            <div class="col-lg-4  col-md-6 my-3 ">
                <div class="image_box d-flex align-items-center justify-content-center  shadow-lg  rounded  "
                    style="height: 350px;">
                    <div class="b">
                        <div class="box_button">
                            <button>Bowls</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 my-3 ">
                <div class="image_box d-flex align-items-center justify-content-center  shadow-lg  rounded  "
                    style="height: 350px;">
                    <div class="c">
                        <div class="box_button">
                            <button>Plates</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-12 my-3 ">
                <div class="image_box d-flex align-items-center justify-content-center  shadow-lg  rounded  "
                    style="height: 350px;">
                    <div class="d">
                        <div class="box_button">
                            <button>Cutleries</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="">
        <div class="container">
            <div class="con" style="padding-bottom: 10px;">
                <h2 class="text-center" style="height: 40px; letter-spacing: 1px; font-size: 40px;">Our Collection</h2>
            </div>
            <div class="content-img">
                <div class="banner2">
                    <div class="content">
                        <h2 class="display-2"
                            style="color: #fff; letter-spacing: 3px; text-shadow: 4px 4px 21px black; font-weight:500;">
                            Best Sellers</h2>
                        <p class=""
                            style="color: #fff; font-size:32px; letter-spacing: 3px; text-shadow: 4px 4px 21px black; font-weight: 400;">
                            Eco-Lifestyle</p>
                    </div>
                </div>
            </div>
            <p class="text-center" style="color: #333; font-weight:400; font-size:30px; letter-spacing:1px;">Our
                eco-friendly products includes plates, bowls and cutleries, sourced from fallen leaves of the Areca
                palm tree.</p>
        </div>
    </div>
    <!-- section  -->

    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="bg-color pt-5 pb-2"
                        style="background-color: #f1f1f1; border-radius: 15px; margin-bottom: 15px;">
                        <h2 class="text-center">Round</h2>
                        <p class="text-center" style="color: #393939;">Palm Leaf Plates</p>
                        <img src="image/card-1.jpeg" alt="" class="px-2" height="220px" width="100%"
                            style="border-radius: 15px;">
                        <br><br>
                        <div class="box_button text-center">
                            <button><a href="catalog.php" class="text-decoration-none text-dark">Shop Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="bg-color pt-5 pb-2"
                        style="background-color: #f1f1f1; border-radius: 15px; margin-bottom: 15px;">
                        <h2 class="text-center" style="color: #393939;">Square</h2>
                        <p class="text-center">Palm Leaf Plates</p>
                        <img src="image/4.webp" alt="" height="220px" width="100%" class="px-2"
                            style="border-radius: 15px;">
                        <br><br>
                        <div class="box_button text-center">
                        <button><a href="catalog.php" class="text-decoration-none text-dark">Shop Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="bg-color pt-5 pb-2"
                        style="background-color: #f1f1f1; border-radius: 15px; margin-bottom: 15px;">
                        <h2 class="text-center" style="color: #393939;">Bowls</h2>
                        <p class="text-center">Palm Leaf Bowls</p>
                        <img src="image/card-3.jpeg" alt="" class="px-2" height="220px" width="100%"
                            style="border-radius: 15px;">
                        <br><br>
                        <div class="box_button text-center">
                        <button><a href="catalog.php" class="text-decoration-none text-dark">Shop Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- New section  -->
    <div class="py-3">
        <div class="container">
            <div class="text-center mb-4">
                <h2 style="color: #333; font-size: 36px;">Ecozon's Gallery</h2>
            </div>
            <div class="row ">

                <div class="col-lg-6 col-sm-12 col-md-12 col-12 ">
                    <img src="image/1.webp" alt="" height="auto" width="100%">

                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                    <img src="image/2.webp" alt="" height="auto" width="100%">

                </div>
                <div class="col-12">
                    <div class="row py-3">
                        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                            <img src="image/4.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                            <img src="image/44.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                            <img src="image/5.webp" alt="" height="auto" width="100%" style="object-fit: cover;">
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                            <img src="image/6.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                            <img src="image/66.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row py-3">
                        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                            <img src="image/7.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                            <img src="image/77.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                            <img src="image/8.webp" alt="" height="auto" width="100%" style="object-fit: cover;">
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                            <img src="image/9.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                            <img src="image/99.webp" alt="" height="177px" width="100%" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-12 col-12">
                    <img src="image/10.webp" alt="" height="auto" width="100%" style="object-fit: cover;">
                </div>
                <div class="col-lg-4 col-sm-12 col-md-12 col-12">
                    <img src="image/last.webp" alt="" height="245px" width="100%" style="object-fit: cover;">
                    <img src="image/100.webp" alt="" height="245px" width="100%" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>


    <?php
    include('footer.php');
    ?>