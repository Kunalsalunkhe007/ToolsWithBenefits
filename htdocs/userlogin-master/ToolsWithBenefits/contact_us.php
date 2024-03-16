<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userlogin'])) {
  // Redirect to login page
  header("Location: ../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.svg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>contact_us</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-11">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/logo.svg" alt="Mobirise Website Builder" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="ind.php">ToolsWithBenefits</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="all_tools.php">All Tools</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="about_us.php">About Us</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="contact_us.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="my_profile.php">My Profile</a></li></ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="header6 cid-twN8XCruBf" id="header6-16">

    

    
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>CONTACT US</strong></h1>
                
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-twN8Tn3BKn" id="form5-15">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Send Query</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                <input type="hidden" name="email" data-form-email="true" value="Your_value">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-15">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-15">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-15">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-15"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-4">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts3 map1 cid-twN8HMUZii" id="contacts3-14">

    

    
    
    <div class="container">
        
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">Email</h6>
                        <p class="mbr-text mbr-fonts-style display-7">Your_mail_id</p>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5"><strong>Working Hours</strong></h6>
                        <p class="mbr-text mbr-fonts-style display-7">9AM to 5PM</p>
                    </div>
                </div>
            </div>
            <div class="map-wrapper col-12 col-md-6">
                <div class="google-map">
                <iframe src="Your_location_google_api_link">
            </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-12">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <a href="about_us.php"><li class="foot-menu-item mbr-fonts-style display-7">About US</li></a>
                <a href="all_tools.php"><li class="foot-menu-item mbr-fonts-style display-7">All Tools</li></a>
                <a href="contact_us.php"><li class="foot-menu-item mbr-fonts-style display-7">Contact US</li></a>
                
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2023 ToolsWithBenefits. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>