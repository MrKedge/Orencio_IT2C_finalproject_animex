<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animex</title>
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
    echo '<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+6</span>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '';
    echo '</div>';
    echo '</nav>';
   
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
    ?>



    <!-- Start Banner Hero -->
    <?php
echo '<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">';
echo '<ol class="carousel-indicators">';
echo '<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>';
echo '<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>';
echo '<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>';
echo '</ol>';
echo '<div class="carousel-inner">';
echo '<div class="carousel-item active">';
echo '<div class="container">';
echo '<div class="row p-5">';
echo '<div class="mx-auto col-md-8 col-lg-6 order-lg-last">';
echo '<img class="img-fluid" src="./assets/img/gojo_1.png" alt="">';
echo '</div>';
echo '<div class="col-lg-6 mb-0 d-flex align-items-center">';
echo '<div class="text-align-left align-self-center">';
echo '<h1 class="h1 text-success"><b>Animex</b> eCommerce</h1>';
echo '<p>';
echo 'Animex Shop is an online shop for Anime action figures.';
echo 'With many different anime and manga. </p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="carousel-item">';
echo '<div class="container">';
echo '<div class="row p-5">';
echo '<div class="mx-auto col-md-8 col-lg-6 order-lg-last">';
echo '<img class="img-fluid" src="./assets/img/daki.png" alt="">';
echo '</div>';
echo '<div class="col-lg-6 mb-0 d-flex align-items-center">';
echo '<div class="text-align-left">';
echo '<h1 class="h1"> What is in it?</h1>';
echo '<h3 class="h2">eCommerce</h3>';
echo '<p>';
echo 'This website contain and sells <strong> high quality</strong> and <strong> affordable</strong>';
echo 'products.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="carousel-item">';
echo '<div class="container">';
echo '<div class="row p-5">';
echo '<div class="mx-auto col-md-8 col-lg-6 order-lg-last">';
echo '<img class="img-fluid" src="./assets/img/kurumi_1.png" alt="">';
echo '</div>';
echo '<div class="col-lg-6 mb-0 d-flex align-items-center">';
echo '<div class="text-align-justify">';
echo '<h1 class="h1">Anime</h1>';
echo '<h3 class="h2">eCommerce</h3>';
echo '<p>';
echo 'Anime boasts such vibrancy and diversity in its characters.';
echo 'And collecting such anime action figures, anime stickers and figurines can be an incredibly fun and rewarding hobby.';
echo 'It can make you feel like a kid again.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">';
echo '<i class="fas fa-chevron-left"></i>';
echo '</a>';
echo '<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">';
echo '<i class="fas fa-chevron-right"></i>';
echo '</a>';
echo '</div>';
?>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <?php
echo '<section class="container py-5">';
echo '<div class="row text-center pt-3">';
echo '<div class="col-lg-6 m-auto">';
echo '<h1 class="h1">Best selling of The Month</h1>';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col-12 col-md-4 p-5 mt-3">';
echo '<a href="#"><img src="./assets/img/hashira1.png" class="rounded-circle img-fluid border"></a>';

echo '<p class="text-center"><a class="btn btn-success">Go Shop</a></p>';
echo '</div>';
echo '<div class="col-12 col-md-4 p-5 mt-3">';
echo '<a href="#"><img src="./assets/img/nezuko2.png" class="rounded-circle img-fluid border"></a>';

echo '<p class="text-center"><a class="btn btn-success">Go Shop</a></p>';
echo '</div>';
echo '<div class="col-12 col-md-4 p-5 mt-3">';
echo '<a href="#"><img src="./assets/img/d.png" class="rounded-circle img-fluid border"></a>';

echo '<p class="text-center"><a class="btn btn-success">Go Shop</a></p>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <?php
echo '<section class="bg-light">';
echo '<div class="container py-5">';
echo '<div class="row text-center py-3">';
echo '<div class="col-lg-6 m-auto">';
echo '<h1 class="h1">Featured Product</h1>';
echo '';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col-12 col-md-4 mb-4">';
echo '<div class="card h-100">';
echo '<a href="shop-single.php">';
echo '<img src="./assets/img/a.png" class="card-img-top" alt="...">';
echo '</a>';
echo '<div class="card-body">';
echo '<ul class="list-unstyled d-flex justify-content-between">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '<li class="text-muted text-right">$240.00</li>';
echo '</ul>';
echo '<a href="shop-single.php" class="h2 text-decoration-none text-dark">Raiden Shogun</a>';
echo '<p class="card-text">';

echo '</p>';
echo '<p class="text-muted">Reviews (24)</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-4 mb-4">';
echo '<div class="card h-100">';
echo '<a href="shop-single.php">';
echo '<img src="./assets/img/c.png" class="card-img-top" alt="...">';
echo '</a>';
echo '<div class="card-body">';
echo '<ul class="list-unstyled d-flex justify-content-between">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '<li class="text-muted text-right">$480.00</li>';
echo '</ul>';
echo '<a href="shop-single.php" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>';
echo '<p class="card-text">';

echo '</p>';
echo '<p class="text-muted">Reviews (48)</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-4 mb-4">';
echo '<div class="card h-100">';
echo '<a href="shop-single.php">';
echo '<img src="./assets/img/b.png" class="card-img-top" alt="...">';
echo '</a>';
echo '<div class="card-body">';
echo '<ul class="list-unstyled d-flex justify-content-between">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '</li>';
echo '<li class="text-muted text-right">$360.00</li>';
echo '</ul>';
echo '<a href="shop-single.php" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>';
echo '<p class="card-text">';

echo '</p>';
echo '<p class="text-muted">Reviews (74)</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <?php
echo '<footer class="bg-dark" id="tempaltemo_footer">';
echo '<div class="container">';
echo '<div class="row">';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-success border-bottom pb-3 border-light logo">Animex shop</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li>';
echo '<i class="fas fa-map-marker-alt fa-fw"></i>';
echo 'Gasan, Marinduque, Phil.';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-phone fa-fw"></i>';
echo '<a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-envelope fa-fw"></i>';
echo '<a class="text-decoration-none" href="mailto:info@company.com">animex@gmail.com</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li><a class="text-decoration-none" href="#">Action Figure</a></li>';
echo '<li><a class="text-decoration-none" href="#">Figurine</a></li>';
echo '';
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
echo '<a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>';
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