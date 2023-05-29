<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'frontend/configF.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eplaza | Online shopping center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> -->
    <link rel="stylesheet" href="../portal/public/css/sidenav.css">
</head>

<body>

    <!-- sidebar -->
    <?php require_once('../partial/master_nav.php');?>
    <!-- Close sidebar -->

    <!-- best sellings product -->
    <div class="container"><?php include_once('../partial/best-selling/bestSell.php'); ?></div>
    <!-- Close best selligs product -->

    <!-- electronics product's slider -->
    <?php include_once('../partial/electronic/slider.php');?>
    <!-- Close electronics product's slider -->

    <!-- electronics product -->
    <div class="container"><?php include_once('../partial/electronic/product.php'); ?></div>
    <!-- Close electronics product -->

    <!-- groceries product's slider -->
    <?php include_once('../partial/grocery/slider.php');?>
    <!-- Close groceries product's slider -->

    <!-- groceries product -->
    <div class="container"><?php include_once('../partial/grocery/product.php'); ?></div>
    <!-- Close groceries product -->

    <!-- cloths product's slider -->
    <?php include_once('../partial/cloth/slider.php');?>
    <!-- Close cloths product's slider -->

    <!-- cloths product -->
    <div class="container"><?php include_once('../partial/cloth/product.php'); ?></div>
    <!-- Close cloths product -->

    <?php require_once('../partial/footer.php');?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>