<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'frontend/configF.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../portal/public/css/navbar.css">
</head>

<body>
    <div class="navbar1">
        <div class="navtop1">
            <div class="eplaza-logo">
                <img src="../partial/logo/eplaza.png" alt="eplaza-logo">
            </div>
            <div class="search1">
                <div class="search-box">
                    <input type="search" placeholder="Search in ePlaza" size="60px">
                </div>
                <div class="btn-1">
                    <input type="button" value="Search">
                </div>
            </div>
            <div class="account">
                <div class="reg">
                    <p><a href="../portal/signin.html">Signin/Signup</a></p>
                    <p class="ac">My account <img src="../partial/logo/user.png" alt="user"></p>
                </div>
                <div class="cart1">
                    <p style="background-color: rgb(46, 45, 45); margin-left: 5px; height: 40px;">|</p>
                    <img src="../partial/logo/cart.png" alt="my-cart">
                    <h6>MY CART</h6>
                </div>
            </div>

        </div>
        <div class="navbottom1">
            <div class="navitem1">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
</body>

</html>