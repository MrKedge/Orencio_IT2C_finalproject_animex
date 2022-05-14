<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<?php
echo '<body>';
echo '';
echo '<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">';
echo '<div class="container text-light">';
echo '<div class="w-100 d-flex justify-content-between">';
echo '<div>';
echo '<i class="fa fa-envelope mx-2"></i>';
echo '<a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>';
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

    /*<!-- Close Top Nav -->


    <!-- Header -->*/

echo '<nav class="navbar navbar-expand-lg navbar-light shadow">';
echo '<div class="container d-flex justify-content-between align-items-center">';
echo '';
echo '<a class="navbar-brand text-success logo h1 align-self-center" href="index.php">';
echo 'Zay';
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

    /*<!-- Close Header -->

    <!-- Modal -->*/

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




    /*<!-- Start Content -->*/
    
echo '<div class="container py-5">';
echo '<div class="row">';
echo '';
echo '<div class="col-lg-3">';
echo '<h1 class="h2 pb-4">Categories</h1>';
echo '<ul class="list-unstyled templatemo-accordion">';
echo '<li class="pb-3">';
echo '<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">';
echo 'Gender';
echo '<i class="fa fa-fw fa-chevron-circle-down mt-1"></i>';
echo '</a>';
echo '<ul class="collapse show list-unstyled pl-3">';
echo '<li><a class="text-decoration-none" href="#">Men</a></li>';
echo '<li><a class="text-decoration-none" href="#">Women</a></li>';
echo '</ul>';
echo '</li>';
echo '<li class="pb-3">';
echo '<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">';
echo 'Sale';
echo '<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>';
echo '</a>';
echo '<ul id="collapseTwo" class="collapse list-unstyled pl-3">';
echo '<li><a class="text-decoration-none" href="#">Sport</a></li>';
echo '<li><a class="text-decoration-none" href="#">Luxury</a></li>';
echo '</ul>';
echo '</li>';
echo '<li class="pb-3">';
echo '<a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">';
echo 'Product';
echo '<i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>';
echo '</a>';
echo '<ul id="collapseThree" class="collapse list-unstyled pl-3">';
echo '<li><a class="text-decoration-none" href="#">Bag</a></li>';
echo '<li><a class="text-decoration-none" href="#">Sweather</a></li>';
echo '<li><a class="text-decoration-none" href="#">Sunglass</a></li>';
echo '</ul>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '';
echo '<div class="col-lg-9">';
echo '<div class="row">';
echo '<div class="col-md-6">';
echo '<ul class="list-inline shop-top-menu pb-3 pt-1">';
echo '<li class="list-inline-item">';
echo '<a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>';
echo '</li>';
echo '<li class="list-inline-item">';
echo '<a class="h3 text-dark text-decoration-none mr-3" href="#">Mens</a>';
echo '</li>';
echo '<li class="list-inline-item">';
echo '<a class="h3 text-dark text-decoration-none" href="#">Womens</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '<div class="col-md-6 pb-4">';
echo '<div class="d-flex">';
echo '<select class="form-control">';
echo '<option>Featured</option>';
echo '<option>A to Z</option>';
echo '<option>Item</option>';
echo '</select>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime10s.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';

                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[9]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[9]->description;

echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[9]->price;
                                    echo '</p>';
                                    
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime11.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
                                    
                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[10]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[10]->description;


                                    
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';

                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[10]->price;
                                    echo '</p>';


                                    
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime12.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
                                    
                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[11]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[11]->description;
                                
                                    
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[11]->price;
                                    echo '</p>';

                   
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime13.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
                                    
                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[12]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[12]->description;

                                
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[12]->price;
                                    echo '</p>';
                                    
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime14.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';

                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[13]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[13]->description;

                                

echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';

                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[13]->price;
                                    echo '</p>';
                                    
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime15.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';

                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[14]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[14]->description;
                                    
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[14]->price;
                                    echo '</p>';

                                   
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime16.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
                                    
                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[15]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[15]->description;

                                   
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[15]->price;
                                    echo '</p>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime17.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';

                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[16]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[16]->description;

                             
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[16]->price;
                                    echo '</p>';
                                    
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="card mb-4 product-wap rounded-0">';
echo '<div class="card rounded-0">';
echo '<img class="card-img rounded-0 img-fluid" src="assets/img/anime18.png">';
echo '<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">';
echo '<ul class="list-unstyled">';
echo '<li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>';
echo '<li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
                                    
                                    echo '<div class="card-body">';
                                    echo '<a href="shop-single.php" class="h3 text-decoration-none">';                           
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[17]->name;


                                    echo '</a>';
                                    echo '<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">';
                                    echo '<li>';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[17]->description;

                                
                                   
echo '</li>';
echo '<li class="pt-2">';
echo '<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>';
echo '<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>';
echo '</li>';
echo '</ul>';
echo '<ul class="list-unstyled d-flex justify-content-center mb-1">';
echo '<li>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-warning fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '<i class="text-muted fa fa-star"></i>';
echo '</li>';
echo '</ul>';
                                    
                                    echo '<p class="text-center mb-0">';
                                    $item = simplexml_load_file('Orencio_Saludo_IT2C_finalproject_Animex.xml');
                                    echo $item->product[16]->price;
                                    echo '</p>';
                                    
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div div="row">';
echo '<ul class="pagination pagination-lg justify-content-end">';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="shop.php">1</a>';
echo '</li>';
echo '<li class="page-item disabled">';
echo '<a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#">2</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop3.php">3</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop4.php">4</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop5.php">5</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop6.php">6</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop7.php">7</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop8.php">8</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop9.php">9</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop10.php">10</a>';
echo '</li>';
echo '<li class="page-item">';
echo '<a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="shop11.php">11</a>';
echo '</li>';
echo '';
echo '';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '<!-- End Content -->';
echo '';
echo '<!-- Start Brands -->';
echo '<section class="bg-light py-5">';
echo '<div class="container my-4">';
echo '<div class="row text-center py-3">';
echo '<div class="col-lg-6 m-auto">';
echo '<h1 class="h1">Our Brands</h1>';
echo '<p>';
echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';
echo 'Lorem ipsum dolor sit amet.';
echo '</p>';
echo '</div>';
echo '<div class="col-lg-9 m-auto tempaltemo-carousel">';
echo '<div class="row d-flex flex-row">';
echo '<!--Controls-->';
echo '<div class="col-1 align-self-center">';
echo '<a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">';
echo '<i class="text-light fas fa-chevron-left"></i>';
echo '</a>';
echo '</div>';
echo '<!--End Controls-->';
echo '';
echo '<!--Carousel Wrapper-->';
echo '<div class="col">';
echo '<div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">';
echo '<!--Slides-->';
echo '<div class="carousel-inner product-links-wap" role="listbox">';
echo '';
echo '<!--First slide-->';
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
echo '<!--End First slide-->';
echo '';
echo '<!--Second slide-->';
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
echo '<!--End Second slide-->';
echo '';
echo '<!--Third slide-->';
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
echo '<!--End Third slide-->';
echo '';
echo '</div>';
echo '<!--End Slides-->';
echo '</div>';
echo '</div>';
echo '<!--End Carousel Wrapper-->';
echo '';
echo '<!--Controls-->';
echo '<div class="col-1 align-self-center">';
echo '<a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">';
echo '<i class="text-light fas fa-chevron-right"></i>';
echo '</a>';
echo '</div>';
echo '<!--End Controls-->';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<!--End Brands-->';
echo '';
echo '';
echo '<!-- Start Footer -->';
echo '<footer class="bg-dark" id="tempaltemo_footer">';
echo '<div class="container">';
echo '<div class="row">';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li>';
echo '<i class="fas fa-map-marker-alt fa-fw"></i>';
echo '123 Consectetur at ligula 10660';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-phone fa-fw"></i>';
echo '<a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>';
echo '</li>';
echo '<li>';
echo '<i class="fa fa-envelope fa-fw"></i>';
echo '<a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '';
echo '<div class="col-md-4 pt-5">';
echo '<h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>';
echo '<ul class="list-unstyled text-light footer-link-list">';
echo '<li><a class="text-decoration-none" href="#">Luxury</a></li>';
echo '<li><a class="text-decoration-none" href="#">Sport Wear</a></li>';
echo '<li><a class="text-decoration-none" href="#">Mens Shoes</a></li>';
echo '<li><a class="text-decoration-none" href="#">Womens Shoes</a></li>';
echo '<li><a class="text-decoration-none" href="#">Popular Dress</a></li>';
echo '<li><a class="text-decoration-none" href="#">Gym Accessories</a></li>';
echo '<li><a class="text-decoration-none" href="#">Sport Shoes</a></li>';
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
echo 'Copyright &copy; 2021 Company Name';
echo '| Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</footer>';
echo '<!-- End Footer -->';
echo '';
echo '<!-- Start Script -->';
echo '<script src="assets/js/jquery-1.11.0.min.js"></script>';
echo '<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>';
echo '<script src="assets/js/bootstrap.bundle.min.js"></script>';
echo '<script src="assets/js/templatemo.js"></script>';
echo '<script src="assets/js/custom.js"></script>';
echo '<!-- End Script -->';
?>
</body>

</html>