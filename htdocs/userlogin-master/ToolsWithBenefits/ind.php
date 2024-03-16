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
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
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
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
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

<section data-bs-version="5.1" class="header19 cid-twMPzarMIH mbr-fullscreen" id="header19-p">

    

    
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="media-container">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title mbr-white mbr-bold mbr-fonts-style mb-3 display-1">TOOLS WITH BENEFITS</h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    Convert Your Work Easily</p>
                

                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mobi-mbri-upload-2 mobi-mbri"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Upload</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mbrib-rocket"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Convert</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mobi-mbri-edit mobi-mbri"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Edit</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mobi-mbri-download-2 mobi-mbri"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Download</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content1 cid-s48udlf8KU" id="content1-8">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-md-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>How it works?</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">Toolswithbenefits is a website that offers a document conversion service, enabling users to convert documents to PDF and vice versa. Additionally, the website also allows users to convert PDF files to other document formats, such as DOC, XLS, PNG, JPG, and more.</h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="video1 cid-twMxwJFHnu" id="video1-k">
    
    
    <div class="align-center container">
        <div class="mbr-section-head">
            
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-lg-10">
                <div class="box">
                    <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                        <img src="assets/images/wallpaperflare.com-wallpaper-1920x1080.jpg" alt="ToolsWithBenefits">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont socicon-youtube socicon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modalWindow" style="display: none;">
            <div class="modalWindow-container">
                <div class="modalWindow-video-container">
                    <div class="modalWindow-video">
                        <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://youtu.be/WQQZ74Ugpvw"></iframe>
                    </div>
                    <a class="close" role="button" data-dismiss="modal" data-bs-dismiss="modal">
                        <span aria-hidden="true" class="mbr-iconfont mobi-mbri-close mobi-mbri closeModal"></span>
                        <span class="sr-only visually-hidden">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-twMCi5WcSs" id="image2-l">
    

    
    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <a href="word_pdf.php"><img src="assets/images/word-to-pdf.svg" alt="ToolsWithBenefits"></a>
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>WORD to PDF</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">&nbsp;It is a powerful and user-friendly online tool that allows you to convert your DOC files to PDF format quickly and easily.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-twMIz0MrlP" id="image1-m">
    

    
    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <a href="html_pdf.php"><img src="assets/images/pdf-to-html.svg" alt="ToolsWithBenefits"></a>
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>HTML to PDF</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                        It is a powerful and user-friendly online tool that allows you to convert your HTML files to PDF format quickly and easily.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-twMJNDyECu" id="image2-n">
    

    
    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <a href="pdf_jpg.php"><img src="assets/images/pdf-to-jpg.svg" alt="ToolsWithBenefits"></a>
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>PDF to JPG</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                        It is a powerful and user-friendly online tool that allows you to convert your PDF files to JPG format quickly and easily.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-twMKRXRQeD" id="image1-o">
    

    
    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/pdf-how-works.svg" alt="ToolsWithBenefits">
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>How to use PDF converter?</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"><strong>1.</strong>&nbsp;Select or "Drag and drop" your PDFs into the PDF converter.<br><strong>2.&nbsp;</strong>For non-PDF formats conversion to PDF will start automatically.<br><strong>3.&nbsp;</strong>For a PDF file choose a format you want to convert to and press “Convert PDF” button.<br><strong>4.&nbsp;</strong>Wait till PDF converter completes the conversion and download your file.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">

    

    

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
</section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/vimeoplayer/player.js"></script>  <script src="assets/playervimeo/vimeo_player.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>