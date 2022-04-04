
<?php
session_start();
// Including a config file to it
require_once "connection.php";
 
// Variable are initialize with empty values
$username = $firstname = $lastname = $phone = $city = $email = $password = $confirm_password = "";
$username_err = $firstname_err = $lastname_err = $phone_err = $city_err=  $email_err= $password_err = $confirm_password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validating the username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Preparing a select statement
        $sql = "SELECT seller_id FROM sign_up_seller WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            //Binding variables to parameters
            $stmt->bind_param("s", $param_username);
            
            // Setting parameters
            $param_username = trim($_POST["username"]);
            
            // Attempting to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already used.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Closing the statement
            $stmt->close();
        }
    }
    
    // Validating the password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validating the confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please enter your password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    //Validating the city
    if(empty(trim($_POST["city"]))){
        $city_err = "Please enter your city.";
    }else{
        $city = trim($_POST["city"]);
    }
     
    //validating the first name
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter your first name.";
    }else{
        $firstname = trim($_POST["firstname"]);
    }

      //validating the last name
      if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter your last name.";
    }else{
        $lastname = trim($_POST["lastname"]);
    }
   
    //validating the phone number
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter your phone number.";
        }else if (!preg_match( "/^[\W][0-9]{3}?[\s]?[0-9]{2}?[\s]?[0-9]{3}[\s]?[0-9]{4}$/", $_POST["phone"])){
            $phone_err= "please enter a valid phone number";
        }
    else{
        $phone = trim($_POST["phone"]);
    }

    // Validating the email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please your email.";
    }else if (!preg_match( "/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i", $_POST["email"])){
        $email_err= "please enter a valid email";
}   else{
        // Preparing a select statement
        $sql = "SELECT seller_id FROM sign_up_seller WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            //Binding variables to parameters
            $stmt->bind_param("s", $param_email);
            
            // Setting parameters
            $param_email = trim($_POST["email"]);
            
            // Attempting to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "This email is already used.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Closing the statement
            $stmt->close();
        }
    }
    

    //Checking the input errors before updating into the database
    if(empty($username_err) && empty($firstname_err) && empty($lastname_err) && empty($phone_err) && empty($city_err) && empty($email_eer) && empty($password_err) && empty($confirm_password_err)){
        
        // Preparing an insert statement
        $sql = "INSERT INTO sign_up_seller (username, fname, lname, phone, city, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){  
            ///Storing the session information
            $_SESSION["username"] = $username;     
            $_SESSION["firstname"] =  $firstname;
            $_SESSION["lastname"] = $lastname;     
            $_SESSION["email"] = $email; 
            $_SESSION["phone"] = $phone; 
            $_SESSION["city"] = $city;     
                ///// Storing Data session variables
             $param_lastname = $lastname;
             $param_firstname = $firstname;
             $param_phone = $phone;
             $param_username = $username;
             $param_email= $email;
             $param_city= $city;
             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Binding variables to parameters
            $stmt->bind_param("sssssss", $param_username, $param_firstname, $param_lastname, $param_phone, $param_city, $param_email, $param_password);


            // Attempting to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: seller_login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            
            }

            // Closing the statement
            $stmt->close();
        }
    }
    
    // Closing the connection
    $mysqli->close();
}
?>
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
                        <li>
                            <a href="seller_sign.php" class="user-button"><i class="fa fa-search-dollar"></i></a><p style="color:white";>Sell</p>
                        </li>                        
                        <li>
                            <a href="seller_login.php" class="user-button"><i class="flaticon-user"></i></a><p style="color:white";>Account</p>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="index.php" style='text-decoration: none'>Home</a>
                        </li>
                        <li>
                            <a href="my_favorites.php" style='text-decoration: none'>My Favorites</a>
                        </li>
                        
                        <li>
                            <a href="contact.php" style='text-decoration: none'>Contact</a>
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
        <div class="luck">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
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
                        <h2 class="title">BUYER'S SIGN UP ACCOUNT</h2>
                        <p>We're happy you're here!</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>   
             </div>
            <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>   
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-control" placeholder="+233 548342152" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>   
            </div>
            <div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                <span class="help-block"><?php echo $city_err; ?></span>   
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>   
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
                        <div class="form-group">
                            <button type="submit" class="custom-button">LOG IN</button>
                             By clicking this button you are agreeing to the <a href="terms.php">terms and conditions</a>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">WANT TO SIGN UP AS SELLER?</h3>
                        <P>Sign up and start selling</P>
                        <a href="seller_sign.php" class="custom-button transparent" style='text-decoration: none'>Sign Up</a>
                    </div>
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="seller_login.php" class="custom-button transparent"style='text-decoration: none'>Login</a>
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
                            <a href="index.php"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
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