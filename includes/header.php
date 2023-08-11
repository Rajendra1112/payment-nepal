<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PaymentNepal</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- REMIX ICONS CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- GOOGLE FONT LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;500;600;700&family=Overpass:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MAGNIFIC-POPUP CSS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- CUSTOMISE LINK CSS  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- MAIN JS -->
    <script src="js/main.js" defer></script>

</head>

<body>
    <header>
        <div class="container">
            <div class="row py-2">
                <div class="col-lg-3 col-md-6 phone">
                    <a href="#"><i class="ri-phone-fill me-2 "></i>977-014880428 / 4880628</a>
                    <!-- <a href="#">977-014880428 / 4880628</a> -->
                </div>
                <div class="col-lg-3 col-md-6 email">
                    <a href="#"><i class="ri-mail-line me-2 "></i>info@example.com</a>
                    <!-- <a href="#">info@example.com</a> -->
                </div>

                <div class="col-lg-3 col-md-6 social-media">
                    <a href="#"><i class="ri-facebook-circle-fill mx-2 "></i></a>
                    <a href="#"><i class="ri-linkedin-box-fill mx-2 "></i></a>
                    <a href="#"><i class="ri-twitter-x-line mx-2 "></i></a>
                    <a href="#"><i class="ri-instagram-fill mx-2 "></i></a>
                </div>

                <div class="col-lg-3 col-md-6 credential">
                    <a href="#"><i class="ri-user-fill me-2 small-icon"></i>Login /</a>
                    <!-- <a href="#">Login</a>
                    / -->
                    <a href="#">Register</a>
                </div>
            </div>

        </div>
    </header>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand col-lg-2" href="#">
                <figure> <img src="images/logo.png"></figure>

            </a>

            <form class="d-flex col-lg-4 navbar-form" role="search">
                <i class="ri-search-line"></i>
                <input class="form-control me-2 pe-2" type="search" placeholder="Enter key words" aria-label="Search">
            </form>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-6">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PRODUCTS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Food</a></li>
                            <li><a class="dropdown-item" href="#">Vegitable</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">NEWS</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            SUPPORT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="faq.php">FAQs</a></li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">BLOG</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>