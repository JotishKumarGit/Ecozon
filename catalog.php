<?php
include('header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #417505;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        /* This is for baner */
        .bg-sec {
            background-image: linear-gradient(rgba(0, 0, 0, 0.295), rgba(0, 0, 0, 0.253)), url('./image/banner.jpg');
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


<div class="bg-sec">
    <div class="banner_text">
        <h1 class="display-2 fw- " style="letter-spacing:2px;font-weight: 500;text-shadow: 3px 3px 36px #0f0f0fad;">
            Products</h1>
    </div>
</div>
</div>


<body>
    
    <div class="container py-5">
        <div class="text-center  pb-2">
            <caption class="">PRICE LIST OF ARECA TABLEWARE – COMMERCIAL GRADE</caption>
        </div>
        <table>

            <thead>
                <tr>
                    <th class="text-white">Sr No</th>
                    <th class="text-white" colspan="2" style="text-align:center">Product Image</th>
                    <th class="text-white">Quantity</th>
                    <th class="text-white">Price in USD</th>
                    <!--  <th>No of cases</th>
                <th>Height</th>
                <th>Width</th> -->

                </tr>

            </thead>

            <tbody>



                <!-- from hare  -->
                <?php
                include('./database/db.php');

                $srr = 1;

                $ins = "SELECT * FROM product";
                $data = mysqli_query($con, $ins);
                $result = mysqli_num_rows($data);
                if ($result) {
                    while ($row = mysqli_fetch_array($data)) {
                ?>
                        <tr>
                            <td name=''><?php echo $srr++; ?> </td>
                            <td name=''><img src="<?php echo $row['p_img']; ?>" alt=""></td>
                            <td><?php echo $row['p_name']; ?></td>
                            <td><?php echo $row['p_rusd']; ?></td>
                            <td><?php echo $row['p_usd']; ?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>


    <?php include('footer.php'); ?>