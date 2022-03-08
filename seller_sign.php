<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sign Up Page</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/seller.css">


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
                        <li>
                            <a href="seller_sign.php" class="user-button"><i class="fa fa-search-dollar"></i></a><p style="color:white";>Sell</p>
                        </li>                       
                        <li>
                            <a href="sign_in.php" class="user-button"><i class="flaticon-user"></i></a><p style="color:white";>Account</p>
                        </li>                        
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
                            <a href="contact.php">Contact</a>
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
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#0">Account</a>
                </li>
                <li>
                    <span>Sign Up</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">SELLER'S SIGN UP ACCOUNT </h2>
                        <p>We're happy you're here!</p>
                    </div>
                    <form class="login-form">
                        <div class="form-group mb-30">
                            <label for="f_name"><i class="fa fa-user"></i></label>
                            <input type="text" id="f_name" placeholder="First Name">
                        </div>
                        <div class="form-group mb-30">
                            <label for="l_name"><i class="fa fa-user"></i></label>
                            <input type="text" id="l_name" placeholder="Last Name">
                        </div>
                        <div class="form-group mb-30">
                            <label for="Email"><i class="far fa-envelope"></i></label>
                            <input type="text" id="login-email" placeholder="Email">
                        </div>
                        <div class="form-group mb-30">
                            <label for="phone"><i class="fa fa-phone"></i></label>
                            <input type="tel" id="phone" placeholder="Phone Number eg. +233 54 834 2821">
                        </div>
                        <div class="form-group mb-30">
                            <label for="city"><i class="fas fa-city"></i></label>
                            <input type="text" id="city" placeholder="City">
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass2" placeholder="Confirm Password">
                            <span class="pass-type2"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group checkgroup mb-30">
                            <input type="checkbox" name="terms" id="check"><label for="check">By clicking this button you are agreeing to the <a href="Terms.php"><p style="color:blue">terms and conditions</p></a></label>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">LOG IN</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">WANT TO SIGN UP AS BUYER?</h3>
                        <P>Sign up and start selling</P>
                        <a href="sign_up.php" class="custom-button transparent">Sign Up</a>
                    </div>
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="seller_login.php" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->


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
                                    <a href="contact.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#0">Help & FAQ</a>
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
    <script src="assets/js/main.js"></script>
</body>
</html>