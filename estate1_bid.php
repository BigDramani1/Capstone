<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Real Estate Biding Page</title>

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
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#0">Real Estate</a>
                </li>
                <li>
                    <span>Real Estate Bidding</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <?php require_once("All_components.php"); ?>
            <?php
            require_once "connection.php";
            // Processing form data when form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {



                // Validating the user amount
                if (empty(trim($_POST["amount"]))) {
                    $amount_err = "Please enter your an amount.";
                } else {
                    $amount = trim($_POST["amount"]);
                }

                if (empty($amount_err)) {
                    if ($_POST['amount']  <=  $_POST['min_bid_price']) {
                        echo "<script>alert('Sorry amount is lower than the minimum bid price. Please enter a number higher than that')</script>";
                    } else {
                        $param_id = $_POST["item_id"];
                        // // Prepare an update statement
                        $sql = "UPDATE seller_item SET min_bid_price  = ? WHERE item_id= ?";
                        $sql1 = "INSERT into buyers_bid (item_id, buyer_id, min_bid_price, title, buy_price) values(?,?,?,?,?)";
                
                        $query = "SELECT * FROM seller_item where item_id=$param_id";
                        $result = mysqli_query($mysqli, $query);
                        // echo $result;
                        // exit;

                        $title = '';
                        $buy_price = 0;
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)) {

                            $title = $row['title'];
                            $buy_price = $row['buy_price'];                            
                        }
                        // Binding variables to parameters
                        if ($stmt = $mysqli->prepare($sql)) {
                            $stmt->bind_param("si",  $param_amount, $param_id);
                            // Setting parameters
                            $param_amount = $amount;
                            $param_id = $_POST["item_id"];
                            if ($stmt->execute()) {
                                if ($stmt1 = $mysqli->prepare($sql1)) {
                                    $stmt1->bind_param("iiisi",  $param_id, $buyer_id, $param_amount, $param_title, $param_price);
                                    // Setting parameters
                                    $param_amount = $amount;
                                    $param_id = $_POST["item_id"];
                                    $buyer_id = $_SESSION['id'];
                                    $param_price = $buy_price;
                                    $param_title = $title;

                                    if ($stmt1->execute()) {
                                        echo "<script>alert('Congratulations, your bid was successful')</script>";
                                        header("location: home.php");
                                    }else{
                                        echo "Oops! Something went wrong. Please try again later.";
                                    }
                                }else{
                                    echo "Oops! Something went wrong. Please try again later.";
                                }
                            } else {
                                echo "Oops! Something went wrong. Please try again later.";
                            }

                            // Closing the statement
                            $stmt->close();
                        }
                    }

                    // Close connection
                    $mysqli->close();
                }
            }

            ?><form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
                <?php
                require_once('assets/Config/const.php');
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $sql = "SELECT * FROM seller_item where item_id=21";
                $result = mysqli_query($mysqli, $sql);
                // Associative while loop array
                while ($row = mysqli_fetch_assoc($result)) {
                    vehicles($row['buy_price'], $row['descriptions'], $row['image'], $row['image1'], $row['image2'], $row['image3'], $row['min_bid_price'], $row['location'], $row['item_id'], $row['title']);
                }
                ?>
            </form>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->


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
                                    <a href="Terms.php">Terms and Conditions</a>
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



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
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
    <script src="./assets/js/main.js"></script>
   
</body>
</html>