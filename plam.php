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

        /* This is for about us -2 section background */
        .background {
            background-image: linear-gradient(rgb(101 79 79), rgb(0 0 0 / 88%)), url(./image/8.webp);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;

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
            <h1 class="display-5 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
                The Making of Palm Leaf Dinnerware</h1>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h2 class="text-center"> Palm Leaf Plates : Making Process</h2>
            </div>
        </div>
    </div>


    <!-- This is plam-leaf  section -->
    <div class="background">
        <div class="container">
            <div class="row ">
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">What is Palm Leaf Dinnerware?</h2>
                                <p class="py-2">Our Palm Leaf Dinnerware emerges from fallen leaves of the Areca palm tree, abundant in the tropical regions of the Pacific, Asia, and East Africa. Crafted by the skilled hands of rural men and women in southern India, each piece is a testament to human craftsmanship.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-1.jpg" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>

                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-2.jpeg" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">How are Palm Leaf Plates Made?</h2>
                                <p class="py-2">Palm Leaf Plates come to life through an age-old technique of heat pressing dry palm leaves. Collected from the naturally shedding Areca palm trees, these leaves are trimmed, cleaned, and, while still moist, undergo a meticulous process of compression with heated plates, molding them into the desired shapes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Are Palm Leaf Plates Organic? </h2>
                                <p class="py-2">Absolutely! Our plates are 100% organic, crafted from natural leaves without a hint of chemicals, toxins, or binding agents in the manufacturing process.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-3.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-4.gif" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Why Plastic Packaging for Palm Leaf Dinnerware?</h2>
                                <p class="py-2">The plastic packaging serves a purpose – to prevent moisture build-up. Made from dried leaves, our plates naturally absorb moisture from the environment. While we've explored compostable alternatives, ensuring the quality of our products remains our top priority.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Palm Plates vs. Bamboo Plates</h2>
                                <p class="py-2">Palm plates and bamboo plates, though similar in appearance, have distinctive origins. Palm plates hail from fallen leaves of Areca palm trees, avoiding the need for artificial adhesives and harm to the trees. Bamboo plates, on the other hand, are often crafted by gluing together thin sheets of bamboo shoots, involving the cutting down of bamboo.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-5.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-6.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2"> Disposing of Used Plates</h2>
                                <p class="py-2">
                                    For those without compost bins, palm leaf plates can naturally decompose in regular trash or food waste in landfills.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Natural Variations and Unique Personalities</h2>
                                <p class="py-2">No two leaves are identical, and the same holds true for our palm leaf dishes. Embrace the variations, streaks, and splotches, as they are a testament to the natural diversity of the leaves.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-7.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-8.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Smell and Taste of Palm Dishes</h2>
                                <p class="py-2">Crafted without chemicals, our palm dishes may carry a mild woody scent, a reminder of the natural properties of dried palm leaves. This scent, however, doesn't interfere with the aroma or taste of your food.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Microwave and Oven Safety</h2>
                                <p class="py-2">Tested in the microwave and oven, our plates can withstand heat, making them suitable for a variety of culinary adventures. However, caution is advised, and direct use in fire is not recommended.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-18.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-19.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Fridge and Freezer Safety</h2>
                                <p class="py-2">Yes, they are fridge and freezer safe, offering flexibility in storage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Versatility of Palm Leaf Dinnerware</h2>
                                <p class="py-2">Our palm leaf dinnerware is a versatile choice, perfect for weddings, catering events, parties, barbecues, picnics, and garden gatherings. Functional, sturdy, and elegant, they elevate any occasion where disposable tableware is practical.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-20.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-12.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Sturdiness of Palm Plates and Bowls</h2>
                                <p class="py-2">Palm leaves' inherent strength, coupled with the heat compression process, results in plates stronger than most plastic and paper alternatives. Hold your food confidently with just one hand!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Cleaning and Reusing Palm Leaf Products</h2>
                                <p class="py-2">Our Palm Leaf Dinnerware emerges from fallen leaves of the Areca palm tree, abundant in the tropical regions of the Pacific, Asia, and East Africa. Crafted by the skilled hands of rural men and women in southern India, each piece is a testament to human craftsmanship.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-13.jpg" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-21.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Washing Before First Use</h2>
                                <p class="py-2">Palm Leaf Plates come to life through an age-old technique of heat pressing dry palm leaves. Collected from the naturally shedding Areca palm trees, these leaves are trimmed, cleaned, and, while still moist, undergo a meticulous process of compression with heated plates, molding them into the desired shapes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Serving Hot and Cold Food</h2>
                                <p class="py-2">Our palm leaf dinnerware is heat and cold resistant, making them ideal for both hot and cold foods.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-22.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-md-5 text-center">
                            <img src="image/plam-23.jpg" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2"> Link to Palm Oil</h2>
                                <p class="py-2">No connection to palm oil here. Our palm leaf products are exclusively crafted from Areca palm trees, distinct from the oil palm varieties associated with deforestation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="py-4">
                    <div class="row align-items-center py-4 shadow-lg" style="border: 4px solid #417505; background-color:white; border-radius:10px;">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="p-3">
                                <h2 class="py-2">Deforestation and Palm Leaf Tableware</h2>
                                <p class="py-2">Rest assured, our tableware doesn't contribute to deforestation. Areca palm trees are cultivated in existing plantations for their edible nuts and by-products, and our tableware is crafted from leaves that naturally fall, ensuring no harm to the trees.</p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="image/plam-24.webp" alt="" height="auto" width="60%" class="shadow-lg" style="border: 1px solid #82b672; border-radius:10px;">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>




    <?php

    include('footer.php');

    ?>