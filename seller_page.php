<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Seller Home Page</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/seller_page.css">
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
                            <a href="seller_dashboard.php" class="mr-3"><i class="fa fa-bars"></i><span class="ml-2 d-none d-sm-inline-block">Dashboard</span></a>
                        </li>
                    </ul>
                    <ul class="cart-button-area">                       
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
                            <a href="seller_page.php">Home</a>
                        </li>
                        <li>
                            <a href="seller_items.php">My Items</a>
                        </li>
                        
                        <li>
                            <a href="seller_contact.php">Contact</a>
                        </li>
                    </ul>
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
                    <h2 style="color:tomato">
                            <?php echo $_SESSION["firstname"]; echo " "; echo $_SESSION["lastname"];?> 
                        </h2>
                        <h1 class="title"><span class="d-xl-block">Start Making</span> Money!</h1>
                    </div>
                </div>
                <div class="col-md-3 col-lg-6 col-xl-6 d-none d-lg-block">
                    <div class="banner-thumb-3">
                        <img src="assets/images/banner/banner-3.png" alt="banner">
                    </div>
                </div>                
            </div>
        </div>
        <div class="banner-shape-2 d-none d-lg-block">
            <img src="assets/css/img/banner-shape-2.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->
  <!--===============Form filling Starts  Here============-->
<div class="cont">
        <h6>Post Your Product</h6>
        <p>Upload your product and start making money</p>
        <form>
           <div class="rows">
                <div class="column">
                    <div class="containers">
                        <div class="select-box">
                          <div class="options-containers">
                            <div class="option">
                              <input
                                type="radio"
                                class="radio"
                                id="product"
                                name="category"
                              />
                            </div>
                            <div class="option">
                                <img src="assets/images/auction/05.png" alt="auction">
                              <input type="radio" class="radio" id="sports" name="category" />
                              <label for="sports">SPORTS</label>
                            </div>
                  
                            <div class="option">
                                <img src="assets/images/auction/06.png" alt="auction">
                              <input type="radio" class="radio" id="real estate" name="category" />
                              <label for="real estate">REAL ESTATE</label>
                            </div>
                  
                            <div class="option">
                                <img src="assets/images/auction/03.png" alt="auction">
                              <input type="radio" class="radio" id="watches" name="category" />
                              <label for="watches">WATCHES</label>
                            </div>
                  
                            <div class="option">
                            <img src="assets/images/auction/01.png" alt="auction">
                              <input type="radio" class="radio" id="vehicles" name="category" />
                              <label for="vehicles">VEHICLES</label>
                            </div>
                  
                            <div class="option">
                                <img src="assets/images/auction/02.png" alt="auction">
                              <input type="radio" class="radio" id="jewelry" name="category" />
                              <label for="jewelry">JEWELRY</label>
                            </div>
                  
                            <div class="option">
                                <img src="assets/images/auction/04.png" alt="auction">
                              <input type="radio" class="radio" id="electronics" name="category" />
                              <label for="electronics">ELECTRONICS</label>
                            </div>
                          </div>
                  
                          <div class="selected">
                            Select Product Category
                          </div>
                        </div>
                      </div>   
                </div>
                <div class="column">
                  <div class="contain">
                    <div class="select-boxs">
                        <div class="options-container">
                          <div class="options">
                            <input
                              type="radio"
                              class="radio"
                              id="product"
                              name="categorys"
                            />
                          </div>
                
                          <div class="options">
                            <input type="radio" class="radio" id="accra" name="categorys" />
                            <label for="accra">ACCRA</label>
                          </div>
                
                          <div class="options">
                            <input type="radio" class="radio" id="kumasi" name="categorys" />
                            <label for="kumasi">KUMASI</label>
                          </div>
                
                          <div class="options">
                            <input type="radio" class="radio" id="cape coast" name="categorys" />
                            <label for="cape coast">CAPE COAST</label>
                          </div>
                
                          <div class="options">
                            <input type="radio" class="radio" id="takoradi" name="categorys" />
                            <label for="takoradi">TAKORADI</label>
                          </div>
                
                          <div class="options">
                            <input type="radio" class="radio" id="ho" name="categorys" />
                            <label for="ho">HO</label>
                          </div>

                          <div class="options">
                            <input type="radio" class="radio" id="temale" name="categorys" />
                            <label for="temale">TEMALE</label>
                          </div>

                          <div class="options">
                            <input type="radio" class="radio" id="koforidua" name="categorys" />
                            <label for="koforidua">KOFORIDUA</label>
                          </div>

                          <div class="options">
                            <input type="radio" class="radio" id="wa" name="categorys" />
                            <label for="wa">WA</label>
                          </div>

                          <div class="options">
                            <input type="radio" class="radio" id="bolgatanga" name="categorys" />
                            <label for="bolgatanga">BOLGATANGA</label>
                          </div>
                        </div>
                        <div class="selects">
                          Select Your Location
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="rows">
                <div class="column">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Description of Product">
                </div>
                <!---make row and column for this and make the phone num echo
                <div class="column">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Title of the product">
                </div>
                <div class="column">
                    <label for="name"></label>
                    <input type="phone" id="name" placeholder="phone number +233">
                </div>-->
                <div class="column">
                    <label for="subject"></label>
                    <input type="number" id="num" placeholder="Enter your min bid amount in GH₵">
                </div>
                </div>
                <div class="rows">
                <div class="column">
                    <label for="subject"></label>
                    <input type="number" id="num" placeholder="Enter your buy price in GH₵">
                </div>
                <div class="column">
                  <input type="file" id="file" name="pictures" multiple>
                  <div class="pic">
                  <label for="file">
                    <i class='fas fa-images'></i>
                      </i>&nbsp;
                      Choose a Photo 
                  </label>
                  </div>
                </div>
            </div>
            <button>Submit</button>
        </div>
        </form>
    </div>
     <!--=========== Video Starts Here =========-->
    <section class="how-video-section pos-rel">
        <div class="how-video-shape bg_img d-none d-md-block"></div>
        <div class="container">
            <div class="how-video-wrapper">
                <p style="font-size:40px; color:#f22876; padding:10px">Watch our tutorial video</p>
                <div class="how-video-area">
                    <iframe width="800" height="430" src="https://www.youtube.com/embed/dIIbltnAcHs" allowfullscreen="true">
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
                    <p>Easy 3 steps to earn cash</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Upload</h4>
                                <p>Upload your product</p>
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
                                <p>Bidders bid on your product</p>
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
                                <p>Get in touch with the highest bidder </p>
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
                                    <a href="seller_terms.php">Terms and Conditions</a>
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
                                    <a href="seller_contact.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="seller_faqs.php">Help & FAQ</a>
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
                            <a href="seller_page.php"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
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
    <script src="assets/js/seller.js"></script>
</body>
</html>