<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eplaza | Online shopping center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- <script src="jquery-3.6.4.js"></script> -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4 class="text-primary">ePlaza</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link d-flex" aria-current="page" href="../view/index.html">
                            <h7 class="text-white">Home</h7>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h7 class="text-white">Shops</h7>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/front-end/view/groceries.html">Groceries</a></li>
                            <li><a class="dropdown-item" href="/front-end/view/cosmetics.html">Cosmetics</a></li>
                            <li><a class="dropdown-item" href="/front-end/view/devices.html">Devices</a></li>
                            <li><a class="dropdown-item" href="/front-end/view/cloths.html">Cloths</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex">
                            <h7 class="text-white">Orders</h7>
                        </a>
                    </li>
                    <li class="nav-item hstack gap-3">
                        <a class="nav-link d-flex">
                            <h7 class="text-white">Delivery Address</h7>
                        </a>
                    </li>
                </ul>
                <form class="d-flex" style="margin-right: 2rem;" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search in Eplaza" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
                <div class="user-reg">
                    <a href="../view/signin.html"><button class="btn btn-outline-primary">Sign in</button></a>
                </div>
            </div>
        </div>
    </nav>



    <!-- Ad -->
    <div class="container">
        <div class="ad mt-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-8 ad-photo">
                        <div class="msg">
                            <h3 class="pt-5">Ad space</h3>
                            <h4>Contact for ad: <br>
                                01610158095, 01760158095</h4>
                            <h4>FB: Rifat R Rayhan</h4>
                        </div>
                    </div>
                    <div class="col-sm-4 ad-event d-flex">
                        <div class="card-group">
                            <div class="card">
                                <img src="../public/img/R.jpeg" class="card-img-top e-img" alt="Event">
                                <div class="card-body">
                                    <h5 class="card-title">Iftar</h5>
                                    <p class="card-text mb-1">Iftar & Doa Mahfil wiil be organized by CSE dept. of
                                        Norther
                                        University Bangladesh</p>
                                    <p class="card-text"><small class="text-body-secondary">Last date of Resigtration:
                                            <br>
                                            18th Apr 2023</small>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="../public/img/R.jpeg" class="card-img-top e-img" alt="Event">
                                <div class="card-body">
                                    <h5 class="card-title">PHP & Laravel</h5>
                                    <p class="card-text">Learn PHP and Laravel under the SEIP and Pondit.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last date of Resigtration:
                                            <br>
                                            28th Apr 2023</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product -->
        <div class="product">
            <h4 class="px-3 pt-3">Device</h4>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/device.jpeg" alt="..." style="height: 15rem;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">120000tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/device.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">89000</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/device.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">95000tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/device.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">175000tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="product">
            <h4 class="px-3 pt-3">Cosmetics</h4>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="product">
            <h4 class="px-3 pt-3">Grocery</h4>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">350tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">1100tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">750tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">699tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/events.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="product">
            <h4 class="px-3 pt-3">Cloth</h4>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/cloth.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">1250tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/cloth.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">1680tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/cloth.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">1750tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/cloth.jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">920tk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="../public/img/R (1).jpeg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- footer -->
        <div class="my-5">

            <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
                <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
                    <div class="me-5">
                        <span>Get connected with us on social networks:</span>
                    </div>

                    <div>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </section>

                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Company name</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    Here you can use rows and columns to organize your footer
                                    content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                </p>
                            </div>

                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Products</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">MDBootstrap</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">MDWordPress</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">BrandFlow</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Bootstrap Angular</a>
                                </p>
                            </div>

                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold">Useful links</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">Your Account</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Become an Affiliate</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Shipping Rates</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Help</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> Dhaka, Bangladesh</p>
                                <p><i class="fas fa-envelope mr-3"></i> rifatrayhan2001@gmail.com</p>
                                <p><i class="fas fa-phone mr-3"></i> +880 1610 158095</p>
                                <p><i class="fas fa-print mr-3"></i> +880 1760 158095</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2023 Copyright:
                    <a class="text-white" href="https://facebook.com/rifatrrayhan">Rifat R Rayhan</a>
                </div>
            </footer>
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <script>
            var carouselWidth = $('.carousel-inner')[0].scrollWidth;
            var cardWidth = $('.carousel-item').width();

            var scrollPosition = 0;

            $('.carousel-control-next').on('click', function(){
                console.log('next');
                scrollPosition = scrollPosition + cardWidth;
                $('.carousel-inner').animate({scrollLeft: scrollPosition}, 600);
            });
        </script>
</body>

</html>