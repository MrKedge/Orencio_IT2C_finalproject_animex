<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animex - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <?php
echo '<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">';
echo '<div class="container text-light">';
echo '<div class="w-100 d-flex justify-content-between">';
echo '<div>';
echo '<i class="fa fa-envelope mx-2"></i>';
echo '<a class="navbar-sm-brand text-light text-decoration-none">animex@gmail.com</a>';
echo '<i class="fa fa-phone mx-2"></i>';
echo '<a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>';
echo '</div>';
echo '<div>';
echo '<a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>';
echo '<a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>';
echo '<a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>';
echo '<a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</nav>';
?>
    <!-- Close Top Nav -->


    <!-- Header -->
    <?php
echo '<nav class="navbar navbar-expand-lg navbar-light shadow">';
echo '<div class="container d-flex justify-content-between align-items-center">';
echo '';
echo '<a class="navbar-brand text-success logo h1 align-self-center" href="index.php">';
echo 'Animex';
echo '</a>';
echo '';
echo '<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '';
echo '<div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">';
echo '<div class="flex-fill">';
echo '<ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="index.php">Home</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="about.php">About</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="shop.php">Shop</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="contact.php">Contact</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '<div class="navbar align-self-center d-flex">';
echo '<div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">';
echo '<div class="input-group">';
echo '<input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">';
echo '<div class="input-group-text">';
echo '<i class="fa fa-fw fa-search"></i>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">';
echo '<i class="fa fa-fw fa-search text-dark mr-2"></i>';
echo '</a>';
echo '<a class="nav-icon position-relative text-decoration-none" href="#">';
echo '<i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>';
echo '<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>';
echo '</a>';
echo '<a class="nav-icon position-relative text-decoration-none" href="#">';
echo '<i class="fa fa-fw fa-user text-dark mr-3"></i>';
echo '<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>';
echo '</a>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '</nav>';
?>
    <!-- Close Header -->

    <!-- Modal -->
    <?php
echo '<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
echo '<div class="modal-dialog modal-lg" role="document">';
echo '<div class="w-100 pt-1 mb-5 text-right">';
echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
echo '</div>';
echo '<form action="" method="get" class="modal-content modal-body border-0 p-0">';
echo '<div class="input-group mb-2">';
echo '<input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">';
echo '<button type="submit" class="input-group-text bg-success text-light">';
echo '<i class="fa fa-fw fa-search text-white"></i>';
echo '</button>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '';
echo '<section class="bg-success py-5">';
echo '<div class="container">';
echo '<div class="row align-items-center py-5">';
echo '<div class="col-md-8 text-white">';
echo '<h1>About Us</h1>';
echo '<p>';
echo 'Animex is an ecommerce website where buyers see a catalog of products or services and';
echo 'electronically purchase them. This website sells anime products such as Anime Action Figures,';
echo 'Anime stickers, and Figurines.';
echo '</p>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<img src="assets/img/about-hero.svg" alt="About Hero">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
    <!-- Close Banner -->

    <!-- Start Section -->
    <?php
echo '<section class="container py-5">';
echo '<div class="row text-center pt-5 pb-3">';
echo '<div class="col-lg-6 m-auto">';
echo '';
echo '';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '';
echo '<div class="col-md-6 col-lg-3 pb-5">';
echo '<div class="h-100 py-5 services-icon-wap shadow">';
echo '<div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>';
echo '<h2 class="h5 mt-4 text-center">Delivery Services</h2>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-6 col-lg-3 pb-5">';
echo '<div class="h-100 py-5 services-icon-wap shadow">';
echo '<div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>';
echo '<h2 class="h5 mt-4 text-center">Shipping & Return</h2>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-6 col-lg-3 pb-5">';
echo '<div class="h-100 py-5 services-icon-wap shadow">';
echo '<div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>';
echo '<h2 class="h5 mt-4 text-center">Promotion</h2>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-6 col-lg-3 pb-5">';
echo '<div class="h-100 py-5 services-icon-wap shadow">';
echo '<div class="h1 text-success text-center"><i class="fa fa-user"></i></div>';
echo '<h2 class="h5 mt-4 text-center">24 Hours Service</h2>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
    <!-- End Section -->

    <!-- Start Brands -->
    <?php
echo '<section class="bg-light py-5">';
echo '<div class="container my-4">';
echo '<div class="row text-center py-3">';
echo '<div class="col-lg-6 m-auto">';
echo '';
echo '';
echo '</div>';
echo '<div class="col-lg-9 m-auto tempaltemo-carousel">';
echo '<div class="row d-flex flex-row">';
echo '<!--Controls-->';
echo '<div class="col-1 align-self-center">';
echo '<a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">';
echo '<i class="text-light fas fa-chevron-left"></i>';
echo '</a>';
echo '</div>';
?>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <?php
echo '<div class="col">';
echo '<div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">';
echo '<!--Slides-->';
echo '<div class="carousel-inner product-links-wap" role="listbox">';
echo '';
/*'<!--First slide-->';*/
echo '<div class="carousel-item active">';
echo '<div class="row">';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <?php
echo '<div class="carousel-item">';
echo '<div class="row">';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <?php
echo '<div class="carousel-item">';
echo '<div class="row">';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>';
echo '</div>';
echo '<div class="col-3 p-md-5">';
echo '<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>';
echo '</div>';
echo '</div>';
echo '</div>';
/*'<!--End Third slide-->';*/
echo '';
echo '</div>';
/*'<!--End Slides-->';*/
echo '</div>';
echo '</div>';
/*'<!--End Carousel Wrapper-->';*/
echo '';
/*'<!--Controls-->';*/
echo '<div class="col-1 align-self-center">';
echo '<a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">';
echo '<i class="text-light fas fa-chevron-right"></i>';
echo '</a>';
echo '</div>';
/* '<!--End Controls-->';*/
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
    <!--End Brands-->


    <!-- Start Footer -->
    <?php
echo '<footer class="bg-dark" id="tempaltemo_footer">';
echo '<div class="container">';
echo '<div class="row">';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-success border-bottom pb-3 border-light logo">Animex</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li>';
echo '<i class="fas fa-map-marker-alt fa-fw"></i>';
echo 'Gasan, Marinduque, Philippines';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-phone fa-fw"></i>';
echo '<a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-envelope fa-fw"></i>';
echo '<a class="text-decoration-none">animex@gmail.com</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li><a class="text-decoration-none" href="#">Action Figure</a></li>';
echo '';
echo '<li><a class="text-decoration-none" href="#">Figurines</a></li>';
echo '</ul>';
echo '</div>';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li><a class="text-decoration-none" href="#">Home</a></li>';
echo '<li><a class="text-decoration-none" href="#">About Us</a></li>';
echo '<li><a class="text-decoration-none" href="#">Shop Locations</a></li>';
echo '<li><a class="text-decoration-none" href="#">FAQs</a></li>';
echo '<li><a class="text-decoration-none" href="#">Contact</a></li>';
echo '</ul>';
echo '</div>';
echo '';
echo '</div>';
echo '';
echo '<div class="row text-light mb-4">';
echo '<div class="col-12 mb-3">';
echo '<div class="w-100 my-3 border-top border-light"></div>';
echo '</div>';
echo '<div class="col-auto me-auto">';
echo '<ul class="list-inline text-left footer-icons">';
echo '<li class="list-inline-item border border-light rounded-circle text-center">';
echo '<a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="http://fb.com/templatemo"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>';
echo '</li>';
echo '<li class="list-inline-item border border-light rounded-circle text-center">';
echo '<a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>';
echo '</li>';
echo '<li class="list-inline-item border border-light rounded-circle text-center">';
echo '<a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>';
echo '</li>';
echo '<li class="list-inline-item border border-light rounded-circle text-center">';
echo '<a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '<div class="col-auto">';
echo '<label class="sr-only" for="subscribeEmail">Email address</label>';
echo '<div class="input-group mb-2">';
echo '<input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">';
echo '<div class="input-group-text btn-success text-light">Subscribe</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="w-100 bg-black py-3">';
echo '<div class="container">';
echo '<div class="row pt-2">';
echo '<div class="col-12">';
echo '<p class="text-left text-light">';
echo 'Copyright &copy; 2022';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</footer>';
?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>