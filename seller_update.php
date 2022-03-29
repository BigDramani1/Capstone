<?php
// Initialize the session
session_start();
// Including the config file
require_once "connection.php";
 
// Variable are initialize with empty values
$username = $firstname = $lastname = $phone = $city=  $email= "";
$new_username_err = $new_firstname_err = $new_lastname_err = $new_phone_err = $new_city_err=  $new_email_err = "";

// Data being processed when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
     //Validating the city
 if(empty(trim($_POST["city"]))){
    $new_city_err = "Please enter your city.";
}else{
    $city = trim($_POST["city"]);
}

 //validating the username
 if(empty(trim($_POST["username"]))){
    $new_username_err = "Please enter your first name.";
}else{
    $username = trim($_POST["username"]);
}
 //validating the first name
 if(empty(trim($_POST["firstname"]))){
    $new_firstname_err = "Please enter your first name.";
}else{
    $firstname = trim($_POST["firstname"]);
}

 //validating the last name
 if(empty(trim($_POST["lastname"]))){
    $new_lastname_err = "Please enter your last name.";
}else{
    $lastname = trim($_POST["lastname"]);
}

//validating the phone number
if(empty(trim($_POST["phone"]))){
    $new_phone_err = "Please enter your phone number.";
    }else if (!preg_match( "/^[\W][0-9]{3}?[\s]?[0-9]{2}?[\s]?[0-9]{3}[\s]?[0-9]{4}$/", $_POST["phone"])){
        $new_phone_err= "please enter a valid phone number";
    }
else{
    $phone = trim($_POST["phone"]);
}

// Validating the email
if(empty(trim($_POST["email"]))){
    $new_email_err = "Please your email.";
    }else if (!preg_match( "/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i", $_POST["email"])){
        $email_err= "please enter a valid email";
    }  
    else{
        $email = trim($_POST["email"]);
    }


// Checking the input errors before updating into the database
if(empty($new_username_err) && empty($new_firstname_err) && empty($new_lastname_err) && empty($new_email_err)  && empty($new_city_err)&& empty($new_phone_err)){
    // Prepare an update statement
    $sql = "UPDATE sign_up_seller SET username = ?, fname = ?, lname = ?, email = ?, city = ?, phone = ? WHERE seller_id= ?";
      // Binding variables to parameters
    if($stmt = $mysqli->prepare($sql)){
     
        $stmt->bind_param("ssssssi", $param_username, $param_firstname, $param_lastname, $param_email,  $param_city, $param_phone, $param_id);
          // Setting parameters
          $param_lastname = $lastname;
          $param_firstname = $firstname;
          $param_phone = $phone;
          $param_username = $username;
          $param_email= $email;
          $param_city= $city;
          $param_id = $_SESSION["id"];
        
        // Attemptings to execute the prepared statement
        if($stmt->execute()){

            $_SESSION["username"] = $username;     
            $_SESSION["firstname"] =  $firstname;
            $_SESSION["lastname"] = $lastname;     
            $_SESSION["email"] = $email; 
            $_SESSION["phone"] = $phone; 
            $_SESSION["city"] = $city; 
            
            header("location: seller_page.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Closing the statement
        $stmt->close();
    }
}

// Close connection
$mysqli->close();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login in Page</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                    <li><a href="log_out.php" class="user-button"><i class='fa fa-sign-out-alt' style='color: white'></i></a><p style="color:white";><strong>Log Out</strong></p><li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="seller_page.php">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="seller_page.php" style='text-decoration: none'>Home</a>
                        </li>
                        <li>
                            <a href="seller_favorites.php" style='text-decoration: none'>My Favorites</a>
                        </li>
                        
                        <li>
                            <a href="seller_contact.php"style='text-decoration: none'>Contact</a>
                        </li>
                        <li>
                            <a href="seller_faqs.php"style='text-decoration: none'>Faqs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

  

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
            <ul class="breadcrumb">
                <li>
                    <a href="seller_page.php">Home</a>
                </li>
                <li>
                    <a href="#0">Account</a>
                </li>
                <li>
                    <span>Login</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="update">
                    <div class="section-header">
                        <h2 class="title">UPDATE ACCOUNT</h2>
                    </div>
                <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($new_username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $_SESSION["username"];?>" placeholder="Firstname" >
                    <span class="help-block"><?php echo $new_username_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_firstname_err)) ? 'has-error' : ''; ?>">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $_SESSION["firstname"];?>" placeholder="Firstname">
                    <span class="help-block"><?php echo $new_firstname_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_lastname_err)) ? 'has-error' : ''; ?>">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $_SESSION["lastname"];?>" placeholder="Lastname" >
                    <span class="help-block"><?php echo $new_lastname_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_phone_err)) ? 'has-error' : ''; ?>">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" class="form-control" value="<?php echo $_SESSION["phone"];?>" placeholder="tel" >
                    <span class="help-block"><?php echo $new_phone_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_email_err)) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $_SESSION["email"];?>" placeholder="Email" >
                    <span class="help-block"><?php echo $new_email_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_city_err)) ? 'has-error' : ''; ?>">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="<?php echo $_SESSION["city"];?>" placeholder="City">
                    <span class="help-block"><?php echo $new_city_err; ?></span>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="seller_profile.php" >Cancel</a>
            </div>
            </form>
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
                                    <a href="seller_page.php">Terms and Conditions</a>
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