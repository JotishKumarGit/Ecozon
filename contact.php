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

    <!-- This is contact us section  -->
    <div class="bg-sec">
        <div class="banner_text">
            <h1 class="display-2 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
                Contact Us</h1>
        </div>
    </div>
    </div>

    <!-- Contact Us -->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d448955.42701436405!2d77.0342912!3d28.4655616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1724398060790!5m2!1sen!2sin" width="100%" height="510px" style="border:1px solid #82b672; border-radius: 10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
          
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
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
                </div>
            </div>
        </div>
    </div>


    <?php
    include('footer.php');
    ?>