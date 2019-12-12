<?php session_start(); ?> 
<!doctype html>
<html lang="en">

<head>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Smart - Multi-purpose Landing Page Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logoo.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/stylz.css">
    


</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/log.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"> 
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item"> 
                                        <a href="index.php" class="page-scroll" href="#about">Plats</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">ABOUT</a>
                                    </li>
                                   
                                    
                                    
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Avis</a>
                                    </li>
                                    
                                     <li class="nav-item">
                                        <a href="cart.php" class="nav-item nav-link active">
                  
                        <i class="fas fa-shopping-cart"></i> Cart <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                 
                 
                </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none mt-15 d-lg-inline-block">
                                <a class="menu-bar" href="#side-menu-right"><i class="lni-menu"></i></a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active" style="background-image: url(assets/images/tacos1.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">The Greatest</h2>
                                            
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(assets/images/tacos2.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Restarent</h2>
                                            
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(assets/images/tacos3.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Of Tacos</h2>
                                            
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->
                    </div> <!-- carousel-inner -->

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="assets/images/loge.png" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
                <ul>
                    <li class="hover-me"><a href="#"> Menus</a><i class="fa fa-angle-right"></i>
                    
                    <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">Tacos</a></li>
                            <li><a href="#">Plats</a></li>
                            <li><a href="#">Omek</a></li>
                        </ul>
                    </div>
                    
                    
                    
                    </li>
                    
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">RESOURCES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div> <!-- menu -->
            <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                </ul>
            </div> <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>
    

    <!--====== SAIDEBAR PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <img src="assets/images/services.jpg" alt="services">
                    </div>
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">The Restaurent Boss Tacos</h4>
                        <p class="text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">An open platform for presentations and content collaboration. Sign up to get early access.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src="assets/images/icon-1.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Powerful templates</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.4s">
                        <div class="about-icon">
                            <img src="assets/images/icon-2.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Designed for everyone</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="about-icon">
                            <img src="assets/images/icon-3.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Work anywhere</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.8s">
                        <div class="about-icon">
                            <img src="assets/images/icon-4.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Updated in real time</h4>
                            <p class="text">Poorly designed presentations are a thing of the past. Create beautiful and high-quality content that is aligned.</p>
                        </div>
                    </div> <!-- single about -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    
    <!--====== CALL TO ACTION TWO PART START ======-->

    <section id="call-action" class="call-action-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-content mt-45">
                        <h3 class="action-title">Get latest updates!</h3>
                        <p class="text">We never spam your email</p>
                    </div> <!-- call action content -->
                </div>
                <div class="col-lg-7">
                    <div class="call-action-form mt-50">
                        <form action="#">
                            <input type="text" placeholder="Enter your email">
                            <div class="action-btn rounded-buttons">
                                <button class="main-btn rounded-three">subscribe</button>
                            </div>
                        </form>
                    </div> <!-- call action form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Donner votre Avis</h3>
                        
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                       
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> Av.Technologie Petite Ariana</li>
                            <li><i class="lni-timer"></i> Lun-Dim: 12.00 H – 00:00 H</li>
                            <li><i class="lni-phone-handset"></i> +216 53-283-233</li>
                            <li><i class="lni-envelope"></i> Bosstacos@gmail.com</li>
                        </ul>
                    </div> <!-- contact two -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="assets/contact.php" method="post">
                            <div class="form-input mt-15">
                                <label>Name</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Name" name="name">
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Massage</label>
                                <div class="input-items default">
                                    <textarea placeholder="Massage" name="massage"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">Submit</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    









    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
