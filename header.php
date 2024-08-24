<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecozon</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .my_box {
            display: flex;
            align-items: center;
        }

        .ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .ul>li {
            list-style: none;
            padding: 10px;
            text-decoration: none;
        }

        .ul>li>a {
            text-decoration: none;
            color: black;
            transition: 0.4s;
        }

        .ul>li>a:hover {
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
            padding: 10px 35px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
        }

        .box_button>button {
            border: none;
            background-color: #ffffff;
            padding: 10px 35px;
            border-radius: 25px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.4s;
        }

        .box_button>button:hover {
            border: none;
            background-color: #00968f;
            color: white;
        }

        .hover_button>button:hover {
            background-color: #05850c;
        }

        .search-bar {
            margin-left: auto;
        }

        .search-bar input {
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <!-- This is header  -->
    <header class="d-none d-lg-block">
        <div class="text-center space" style="border-bottom: 1px solid #80808033 !important;">
            <p class="py-2 m-0">Welcome to our store</p>
        </div>
        <div class="container p-3 text-capitalize">
            <div class="my_box">
                <div class="logo">
                    <a href="index.php" class="fs-4  text-decoration-none" style="color: #4d4d4d; padding-right: 20px ;">Ecozon</a>
                </div>
                <ul class="ul">
                    <li><a href="index.php" style="color: black;">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="plam.php">Palm Leaf Dinnerware</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                             </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li><a href="catalog.php" class="text-secondary">Catalog</a></li>
                    <li><a href="wholesale.php" class="text-secondary">Wholesale</a></li>
                    <li><a href="contact.php" class="text-secondary">Contact</a></li>
                </ul>
                <!-- <div class="search-bar">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div> -->
            </div>
        </div>
    </header>

    <!-- Mobile Navbar -->
    <nav class="navbar navbar-expand-lg d-lg-none">
        <div class="container">
            <a class="navbar-brand" href="#">Ecozon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wholesale.php">Wholesale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="plam.php">Palm Leaf Dinnerware</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>