<?php

session_start();


require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb();  


if (isset($_POST['tard'])) { 
      
     
          if(isset($_SESSION['tard'])){

            $count = count($_SESSION['tard']);
            $item_array = array(
                'nametard' => $_POST['nametard'] , 
                'prix'=>$_POST['prix']   ,  
            );  

            $_SESSION['tard'][$count] = $item_array;
            
        }

    else{

        $item_array = array(
                'nametard' => $_POST['nametard'],
               'prix'=>$_POST['prix']  , 
        ); 


        $_SESSION['tard'][0] = $item_array;
       
       }
          
               

    }



if (isset($_POST['vider'])) { unset($_SESSION['cart']);

         $supp = $db->vider();
            if (!$supp)  echo("erreur vider panier") ;  
      }

 if (isset($_POST['increment'])) {
         
            foreach ($_SESSION['cart'] as $key => $value){ 
          if($value["product_id"] == $_GET['id']) { 
          
             $id=$_GET['id'] ;
              $prix=$_POST['prix']; 
            $incquantity = $db->inc($id,$prix);
            if (!$incquantity) { echo("erreur incrementer quantity") ;  } 
           

          } 
         
           }
      }
     
       if (isset($_POST['decriment'])) { $f=0 ;  
         
            foreach ($_SESSION['cart'] as $key => $value){ 
                            if(($value["product_id"] == $_GET['id']))  { 
                           $result = $db->deccc($_GET['id']); 
                            $row = mysqli_fetch_assoc($result);
                                     if ($row['quantite'] != 1){   
                                    
              
                                                              
                                     $prix=$_POST['prix']; 
                                     $id=$_GET['id'] ;
                                     $decquantity = $db->dec($id,$prix);
                                     if (!$decquantity) echo("erreur decrementer quantity") ;  }}
             } 
          
          
      
     }



if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
            $id=$_GET['id'] ;
            $suppr = $db->supprimer($id);
            if (!$suppr) echo("erreur supprimer produit") ; 

              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Plat supprimé')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


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
    <title>Mon Panier</title>

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
                                    <li class="nav-item ">
                                        <a href="index.php"  class="page-scroll" href="#home">Plat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">ABOUT</a>
                                    </li>
                                   
                                    
                                    
                                    <li class="nav-item ">
                                        <a class="page-scroll" href="#contact">Avis</a>
                                    </li>
                                     <li class="nav-item active">
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





 
           
                <?php

              $total = 0;
              if (isset($_SESSION['cart'])) {
              $count=count($_SESSION['cart']); 
             } 
                   

 $nbplats=0; ?> <div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart"> <h2>Mon panier   </h2> 
                <?php
                    if (isset($_SESSION['cart'])  && ($count != 0) ){
                        ?>   <table > <tr>       <td>          <form method="post">  
                <input type="text" placeholder="Rechercher dans panier" name="rplat"> </form>    </td> <td>
    <form method="post">
                      &nbsp&nbsp  <button type="submit" class="btn btn-secondary mx-2" value=1 name="vider" >Vider Panier</button>    </form> </td> </tr>  </table> 
                <hr>

                         <form method="post"> 
                        <button type="submit" class="btn btn-success mx-2" value=1 name="nomasc" >Trier par Nom plat asc</button>      
  
                        <button type="submit" class="btn btn-success mx-2"  value=2 name="nomdesc">Trier par Nom plat desc</button>   
     
                        <button type="submit" class="btn btn-success mx-2" value=3  name="prix"  >Trier par Prix</button>  </form> </br>
                        <?php
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                      $quantity = array_column($_SESSION['cart'], 'quantity');
                        if (isset($_POST['rplat'])) $result = $db->rplat($_POST['rplat']);
                      else if (isset($_POST['prix'])) $result = $db->triprix();
                     else if ( isset($_POST['nomasc']))  $result = $db->trinomasc();
                      else if (isset($_POST['nomdesc'])) $result = $db->trinomdesc(); 
                        else  $result = $db->getDatajoin(); 
              
                        while ($row = mysqli_fetch_assoc($result)){ 
                            foreach ($product_id as $id){ 
                                if ($row['reference'] == $id){   
                                    cartElement($row['img'], $row['nom'],$row['prix'], $row['reference'],$row['quantite']);
                                    $total = $total + ((int)$row['prix'] * $row['quantite'])   ; 
                                    $nbplats= $nbplats + $row['quantite']; 
                                   
                                }
                            }
                        } 
                    }else{
                        echo "<h5>Panier est vide</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>Détails </h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">

                        <?php echo "<h6>Nombre Plats </h6>";
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Prix total </h6>";
                            }else{
                                echo "<h6>Prix (0 plats)</h6>";
                            }
                        ?>
                        <h6>Frais livraison</h6>
                         <h6>Coupon (option)</h6>
                        <hr>
                        <h6>Montant total à payer</h6>
                    </div>
                    <div class="col-md-6">
                        <?php $totalC = $total ; if (isset($_POST['coupon'])) {
                           $codecoupon=$_POST['coupon'];
                          
                           if ( $result = $db->coupon($codecoupon)) {
                   $row = mysqli_fetch_assoc($result) ; 
                           $red=$row['reduction']; 
                       $totalC = $total - $red ; } else {
echo " <script>alert('Coupon non valide')</script>  ";   echo "ddd";      
                             }

}


                             ?>
                         <h6><?php echo $nbplats ; ?> </h6>
                       
                        <h6><?php echo $total; ?> DT </h6>
                        <h6 class="text-success">Gratuit</h6>
                        <form method="post"> 
                        <input type="text" size="5" placeholder="Coupon" name="coupon"></form>
                        <hr>
                        <h6><?php
                            echo $totalC;
                            ?> DT</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>











                       








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




                     

 <li class="hover-me"><a href="#"> Liste souhait</a><i class="fa fa-angle-right"></i>
                    
                    <div class="sub-menu-2">
                        <ul>  <?php  if (isset($_SESSION['tard']))  foreach ($_SESSION['tard'] as $key => $value)  echo ("
                            <li><a href=\"#\"> ".$value["nametard"] ." </a></li> ") ; ?>
                          
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
