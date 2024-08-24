<?php
include('header.php');
include('./database/db.php');

if (isset($_POST['btn'])) {

    $p_name = $_POST['p_name'];
    $p_rusd = $_POST['p_rusd'];
    $p_usd = $_POST['p_usd'];
    // $p_l = $_POST['p_l'];
    // $p_b = $_POST['p_b'];
    // $p_h = $_POST['p_h'];
// If i need height width length then we uncomment this code and then we insert these three then value is an inserted


    // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = $_FILES["p_img"]["name"];
    $fld1 = "image/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["p_img"]['tmp_name'], $fld1);


    $ins = "INSERT INTO `product`( `p_name`,`p_rusd`,`p_usd`,`p_img`) VALUES (  '$p_name', '$p_rusd', '$p_usd','$fld1')";

    $data = mysqli_query($con, $ins);

    if ($data) {
?>
        <script type="text/javascript">
            alert("Data saved successfully");
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please try again");
        </script>
<?php

    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

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
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>

                <th>Product Image</th>
                <th>Description of Goods</th>
                <th>No. of cases</th>
                <th>Price in USD</th>
                <!-- <th></th>
                <th>Width</th>
                <th>Height</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="POST" enctype="multipart/form-data">
                    <td><input type="file" name="p_img" id="fileUpload" required></td>
                    <td><input type="text" name='p_name'></td>
                    <td><input type="text" name='p_rusd'></td>
                    <td><input type="text" name='p_usd'></td>
                    <!-- <td><input type="text" name='p_l'></td>
                     <td><input type="text" name='p_b'></td> 
                    <td><input type="text" name='p_h'></td> -->

            </tr>

            <!-- Add more rows as needed -->
        </tbody>

    </table>
    <div class="text-center py-3">
        <button type="submit" name='btn'>Submit</button>
    </div>
    </form>
</body>

</html>