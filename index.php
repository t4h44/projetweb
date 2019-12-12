<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');
 


$database = new CreateDb();
   
if (isset($_POST['add'])){   if ( isset(($_SESSION['id'] )) )    {
   
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id"); 

        if(in_array($_POST['product_id'], $item_array_id)){

                 foreach ($_SESSION['cart'] as $key => $value){ 
                                  if($value["product_id"] == $_POST['product_id']) { 
          
                                 $id=$_POST['product_id'];
                              $prix=$_POST['prix']; 
                               $incquantity = $database->inc($id,$prix);
                        if (!$incquantity) { echo("erreur incrementer quantity") ;  } 
           

                      } 
                       
                          }
            ?> <script>
           var k = document.getElementById("1");
            alert('Quantité du plat '+'<?php echo($_POST["nom"]) ?>'+ ' augmenté')</script>
           <?php
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'] , 
                'quantity'=>1   
            );  

            $_SESSION['cart'][$count] = $item_array;
            $addpanier = $database->req();
            if (!$addpanier) echo("erreur ajout a la table panier") ; 
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id'],
               'quantity'=>1 , 
        ); 


        $_SESSION['cart'][0] = $item_array;
       
         
           $addpanier = $database->req();
            if (!$addpanier) echo("erreur ajout a la table panier") ; 
               

    }
}else {header("location:../login.php");}}

?>

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
                                    <li class="nav-item ">
                                        <a href="home.php" class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="index.php"  class="page-scroll" href="#home">Plat</a>
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



<div class="container">
        <div class="row text-center py-5">
            <?php  
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['nom'], $row['prix'], $row['img'], $row['reference'],$row['categorie']);
                }
            ?>
        </div>
</div>







                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>  



    <div class="sidebar-right"> 
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="assets/images/loge.png" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">  <center><h3>Bonjour,  <?php echo ($_SESSION['nom'] ) ;  ?> </h3></center>
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
                     <li><a href="../login.php">Déconecter</a></li>
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
