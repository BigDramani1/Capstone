<?php 
session_start();

//adding to cart
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['favorites'])){

        $item_array_id = array_column($_SESSION['favorites'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the Favorites..!')</script>";
            echo "<script>window.location = 'home.php'</script>";
        }else{

            $count = count($_SESSION['favorites']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['favorites'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['favorites'][0] = $item_array;
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="dashboard.php" class="mr-3"><i class="fa fa-bars"></i><span class="ml-2 d-none d-sm-inline-block">Dashboard</span></a>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                    <li><a href="my_favorites.php" class="cart-button"><i class='fa fa-star' style='color: yellowgreen'></i>
                    <?php

                    if (isset($_SESSION['favorites'])){
                        $count = count($_SESSION['favorites']);
                        echo "<span class=\"amount\">$count</span>";
                    }else{
                        echo "<span class=\"amount\">0</span>";
                    }

                    ?>
                      </a></li>                       
                    
                    <li><a href="log_out.php" class="user-button"><i class='fa fa-sign-out-alt' style='color: white'></i></a><p style="color:white";><strong>Log Out</strong></p><li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="home.php">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="my_favorites.php">My Favorites</a>
                        </li>
                        
                        <li>
                            <a href="user_contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h1 class="title"> Welcome!🎉</h1>
                        <h2 style="color:tomato">
                            <?php echo $_SESSION["firstname"]; echo " "; echo $_SESSION["lastname"];?> 
                        </h2>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="assets/images/banner/banner-2.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h6 class="title pl-0 w-100">Browse the highlights</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a href="vehicles.php" class="browse-item">
                            <img src="assets/images/auction/01.png" alt="auction">
                            <span class="info">Vehicles</span>
                        </a>
                        <a href="jewelry.php" class="browse-item">
                            <img src="assets/images/auction/02.png" alt="auction">
                            <span class="info">Jewelry</span>
                        </a>
                        <a href="watches.php" class="browse-item">
                            <img src="assets/images/auction/03.png" alt="auction">
                            <span class="info">Watches</span>
                        </a>
                        <a href="electronics.php" class="browse-item">
                            <img src="assets/images/auction/04.png" alt="auction">
                            <span class="info">Electronics</span>
                        </a>
                        <a href="sports.php" class="browse-item">
                            <img src="assets/images/auction/05.png" alt="auction">
                            <span class="info">Sports</span>
                        </a>
                        <a href="house.php" class="browse-item">
                            <img src="assets/images/auction/06.png" alt="auction">
                            <span class="info">Real Estate</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->
        
        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/car-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Vehicles</h2>
                            <p>We offer affordable Vehicles</p>
                        </div>
                    </div>
                    <a href="vehicles.php" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                <?php require_once ("component.php");?>
                        <?php
                         require_once('assets/Config/const.php');
                         $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                         $sql = "SELECT * FROM seller_item where categories='VEHICLES' limit 3";
                         $result = mysqli_query($mysqli, $sql);
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)){
                            component($row['title'], $row['min_bid_price'], $row['image'],$row['item_id'], $row['buy_price'], $row['direction']);
                        }                                                                              
                    ?>
                </div>
            </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="assets/images/header-icons/02.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Jewelry</h2>
                        <p>Online jewelry auctions where you can bid now and save money</p>
                    </div>
                </div>
                <a href="jewelry.php" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
            <?php require_once ("component.php");?>
                        <?php
                         require_once('assets/Config/const.php');
                         $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                         $sql = "SELECT * FROM seller_item where categories='JEWELRY' limit 3";
                         $result = mysqli_query($mysqli, $sql);
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)){
                            component($row['title'], $row['min_bid_price'], $row['image'],$row['item_id'], $row['buy_price'], $row['direction']);
                        }                                                                              
                    ?>
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->
    <!--============= Watches Auction Section Starts Here =============-->
    <section class="watches-auction-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="assets/images/header-icons/03.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Watches</h2>
                        <p>Shop for men & women designer brand watches</p>
                    </div>
                </div>
                <a href="watches.php" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
            <?php require_once ("component.php");?>
                        <?php
                         require_once('assets/Config/const.php');
                         $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                         $sql = "SELECT * FROM seller_item where categories='WATCHES' limit 3";
                         $result = mysqli_query($mysqli, $sql);
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)){
                            component($row['title'], $row['min_bid_price'], $row['image'],$row['item_id'], $row['buy_price'], $row['direction']);
                        }                                                                              
                    ?>
            </div>
        </div>
    </section>
    <!--============= Watches Auction Section Ends Here =============-->
    <!--============ Real Estate Section Starts Here =============-->
    <section class="real-estate-auction padding-top padding-bottom pos-rel oh">
        <div class="car-bg"><img src="assets/images/auction/realstate/real-bg.png" alt="realstate"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="assets/images/header-icons/06.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Real Estate</h2>
                        <p>Find auctions for Homes, Condos, Residential & Commercial Properties.</p>
                    </div>
                </div>
                <a href="house.php" class="normal-button">View All</a>
            </div>
            <div class="auction-slider-4 owl-theme owl-carousel">
            <?php require_once ("component.php");?>
                        <?php
                         require_once('assets/Config/const.php');
                         $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                         $sql = "SELECT * FROM seller_item where categories='REAL ESTATE' limit 3";
                         $result = mysqli_query($mysqli, $sql);
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)){
                            estate($row['title'], $row['min_bid_price'], $row['image'],$row['item_id'], $row['buy_price'], $row['direction']);
                        }                                                                              
                    ?>
                     </div>
                <div class="slider-nav real-style ml-auto">
                <a href="#0" class="real-prev"><i class="flaticon-left-arrow"></i></a>
                <div class="pagination"></div>
                <a href="#0" class="real-next active"><i class="flaticon-right-arrow"></i></a>
        </div>
    </section>
    <!--============= Real Estate Section Starts Here =============-->
     <!--=========== Video Starts Here =========-->
    <section class="how-video-section pos-rel">
        <div class="how-video-shape bg_img d-none d-md-block"></div>
        <div class="container">
            <div class="how-video-wrapper">
                <div class="tutorial">
                <p>Watch our tutorial video</p>
                </div>
                <div class="how-video-area">
                    <iframe width="800" height="430" src="https://www.youtube.com/embed/dIIbltnAcHs">
                    </iframe>
                </div>
            </div>
    </div>
</section>
   <!--=========== Video Ends Here =========-->
    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->

    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="assets/images/footer/newslater.png" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Thanks for using Divanta </h5>
                            <h3 class="title">Have a fun day 🥳🎉🎉</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="vehicles.php">Vehicles</a>
                                </li>
                                <li>
                                    <a href="watches.php">Watches</a>
                                </li>
                                <li>
                                    <a href="electronics.php">Electronics</a>
                                </li>
                                <li>
                                    <a href="houses.php">Real Estate</a>
                                </li>
                                <li>
                                    <a href="Jewelry.php">Jewelry</a>
                                </li>
                                <li>
                                    <a href="sports.php">Sports & Outdoor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Divanta</a>
                                </li>
                                <li>
                                    <a href="user_terms.php">Terms and Conditions</a>
                                </li>
                                
                                    <a style ="color:white;">Created by Dramani Alhassan</a>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="user_contact.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="user_faqs.php">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>+233 548342821</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i>a.dramani@aisghana.org</span></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>Adenta, Madina</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.facebook.com/alhassan.dramani.9/" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/1Bigdramani?t=gHxsG4E65YJHNeiKV2_Jeg&s=09"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/big_dramani4/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/dramani-alhassan-b90b22202/"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="home.php"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
                        </div>
                        <div class="copyright"><p>&copy; Copyright 2021 | <a> Divanta is created by Dramani Alhassan </a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>             
</body>
</html>