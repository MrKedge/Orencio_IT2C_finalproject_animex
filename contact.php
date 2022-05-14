<!DOCTYPE html>
<html lang="en">

<head>
    <title>Animex - Contact</title>
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

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    


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
echo '<a class="navbar-sm-brand text-light text-decoration-none" href="#">animex@gmail.com</a>';
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
?>


    <!-- Start Content Page -->
    <?php
echo '<div class="container-fluid bg-light py-5">';
echo '<div class="col-md-6 m-auto text-center">';
echo '<h1 class="h1">Contact Us</h1>';
echo '<p>';


echo '</p>';
echo '</div>';
echo '</div>';
?>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>Zay</b> eCommerce Template<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->

    <!-- Start Contact -->
    <?php
echo '<div class="container py-5">';
echo '<div class="row py-5">';
echo '<form class="col-md-9 m-auto" method="post" role="form">';
echo '<div class="row">';
echo '<div class="form-group col-md-6 mb-3">';
echo '<label for="inputname">Name</label>';
echo '<input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">';
echo '</div>';
echo '<div class="form-group col-md-6 mb-3">';
echo '<label for="inputemail">Email</label>';
echo '<input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">';
echo '</div>';
echo '</div>';
echo '<div class="mb-3">';
echo '<label for="inputsubject">Subject</label>';
echo '<input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">';
echo '</div>';
echo '<div class="mb-3">';
echo '<label for="inputmessage">Message</label>';
echo '<textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col text-end mt-2">';
echo '<button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</div>';
?>
    <!-- End Contact -->


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
echo '<a class="text-decoration-none" href="mailto:info@company.com">animex@gmail.com</a>';
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
echo '';
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