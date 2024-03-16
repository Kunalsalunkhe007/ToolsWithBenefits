<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: ../login.php");
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
  
  
  <title>All_Tools</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-q">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/logo.svg" alt="ToolsWithBenefits" style="height: 3.8rem;">
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

<section data-bs-version="5.1" class="header6 cid-twMU3j4CSQ" id="header6-v">

    

    
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>OUR TOOLS</strong></h1>
                
                <p class="mbr-text mbr-white mbr-fonts-style display-7">Here are our awesome tools...</p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider5 mbr-embla cid-twSjO7S4JQ mbr-parallax-background" id="slider5-26">
    
    <div class="mbr-overlay"></div>
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>From PDF</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Convert your documents from PDF</h5>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/pdf-to-word-1.png" alt="ToolsWithBenefits" title="" data-slide-to="0" data-bs-slide-to="0">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PDF to WORD</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="pdf_word.php" class="btn item-btn btn-black display-7" target="_blank">Convert &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/pdf-to-excel.png" alt="ToolsWithBenefits" title="" data-slide-to="1" data-bs-slide-to="1">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PDF to EXCEL</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="pdf_xls.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/pdf-to-ppt.png" alt="ToolsWithBenefits" title="" data-slide-to="2" data-bs-slide-to="2">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PDF to PPT</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="pdf_ppt.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/pdf-to-jpg.png" alt="ToolsWithBenefits" title="" data-slide-to="3" data-bs-slide-to="3">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PDF to JPG</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="pdf_jpg.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div><div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/pdf-to-png.svg" alt="ToolsWithBenefits" title="" data-slide-to="4" data-bs-slide-to="4">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PDF to PNG</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="pdf_png.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider5 mbr-embla cid-twWD0SPgWb mbr-parallax-background" id="slider5-27">
    
    <div class="mbr-overlay"></div>
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>To PDF</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Convert your documents to PDF</h5>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/word-to-pdf.png" alt="ToolsWithBenefits" title="" data-slide-to="0" data-bs-slide-to="0">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>WORD to PDF</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="word_pdf.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/image-2.svg" alt="ToolsWithBenefits" title="" data-slide-to="1" data-bs-slide-to="1">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>EXCEL to PDF</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="excel_pdf.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/ppt-to-pdf.png" alt="ToolsWithBenefits" title="" data-slide-to="2" data-bs-slide-to="2">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>PPT to PDF</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="ppt_pdf.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/jpg-to-pdf.svg" alt="ToolsWithBenefits" title="" data-slide-to="3" data-bs-slide-to="3">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>JPG to PDF</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="jpg_pdf.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div><div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-img">
                                <div class="item-wrapper">
                                    <img src="assets/images/html-to-pdf.svg" alt="ToolsWithBenefits" title="" data-slide-to="4" data-bs-slide-to="4">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5"><strong>HTML to PDF</strong></h5>
                                
                                
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="html_pdf.php" class="btn item-btn btn-black display-7" target="_blank">Convert
                                    &gt;</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery2 cid-twWFTF3oXP" id="gallery2-29">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Edit PDF</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
                Edit your files</h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/merge.svg" alt="ToolsWithBenefits">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">Encrypt PDF</h5>
                        
                        
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="encrypt.php" class="btn btn-primary item-btn display-7" target="_blank">Convert</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/split.png" alt="ToolsWithBenefits">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">Watermark</h5>
                        
                        
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="watermark.php" class="btn btn-primary item-btn display-7" target="_blank">Convert</a></div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-r">

    

    

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
</section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/embla/embla.min.js"></script>  <script src="assets/embla/script.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>