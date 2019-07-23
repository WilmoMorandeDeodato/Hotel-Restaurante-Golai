<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<?php

    include('include/verifica-logado.php');

?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <title>Hotel & Restaurante Golai</title>


  <!--meta tags -->
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="keywords" content="Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


  <script>
     addEventListener("load", function () {
         setTimeout(hideURLbar, 0);
     }, false);
     
     function hideURLbar() {
         window.scrollTo(0, 1);
     }
  </script>



   <!-- CHAMADEA DO reCaptcha -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <script type="text/javascript">
       var onloadCallback = function() {
           grecaptcha.render('html_element', {
               'sitekey' : '6LftwaoUAAAAAM_29bSgFucUThVNU5-V5u1qGlES'
           });
       };
   </script>



  <script src="js/zepto.min.js"></script>

  <script src="Javascript.min.js"></script>
  <!--//meta tags ends here-->


  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->


  <!-- font-awesome icons -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- //font-awesome icons -->


  <!--clients-->
  <link href="css/owl.carousel.css" rel="stylesheet">
  <!--//clients-->


  <!--Gallery hover-->
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <!--//Gallery hover-->


  <!--lightbox slider-->
  <link rel="stylesheet" href="css/lightbox.css">
  <!-- lightbox slider-->


  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">

  <link href="css/stylus.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->

  <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
</head>
<body>



  <div class="header-outs" id="header">
     <div class="header-w3layouts">
        <!--//navigation section -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="hedder-up">
                <img src="images/GolaiLogo.png" alt="" class="GlogoPeq" style="width: 20%">
            </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                 <li class="nav-item active">
                    <a class="nav-link" href="cliente-home-page">Início <span class="sr-only">(current)</span></a>
                 </li>
                 <?php if (isset($_SESSION['nome'])): ?>
                 <li class="nav-item">
                    <a href="?logout" class="nav-link"><?php echo $_SESSION['nome']; ?> <span class="online-ico">֍</span></a>
                 </li>
                 <?php endif; ?>
              </ul>
           </div>
        </nav>
        <!--//navigation section -->
        <div class="clearfix"> </div>
     </div>
         <!-- Slideshow 4 -->
         <div class="slider-img">
            <div class="container">
               <div class="slider-info">
                  <p>
                  </p>



                  <div class="col-lg-3 col-md-6 col-sm-6 w3layouts-service-list text-center menu-p">
                     <div class="white-shadow">
                        <div class="text-wls-ser-bake">
                           <a href="quartos-ver.php">
                              <span class="fas fa-adjust banner-icon"></span>
                            </a>
                        </div>
                        <div class="ser-inner-info">
                           <h4>Quartos</h4>
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-3 col-md-6 col-sm-6 w3layouts-service-list text-center menu-p">
                     <div class="white-shadow">
                        <div class="text-wls-ser-bake">
                           <a href="Hotel/hotel-home-page.php">
                              <span class="fas fa-adjust banner-icon"></span>
                            </a>
                        </div>
                        <div class="ser-inner-info">
                           <h4>Hotel</h4>
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-3 col-md-6 col-sm-6 w3layouts-service-list text-center menu-p">
                     <div class="white-shadow">
                        <div class="text-wls-ser-bake">
                           <a href="Hotel/hotel-home-page.php">
                              <span class="fas fa-adjust banner-icon"></span>
                            </a>
                        </div>
                        <div class="ser-inner-info">
                           <h4>Hotel</h4>
                        </div>
                     </div>
                  </div>



                  </div>
               </div>
            </div>
         </div>
      </div>
  <!-- //banner -->
      <!--About-->
      <section class="about" id="about">

      </section>
      <!-- //about-->
      <!--stats-->
      <section class="state py-lg-4 py-md-3 py-sm-3 py-3">

      </section>

      <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3 " id="gallery">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h2 class="fundos-titulo-1 title text-right mb-lg-2 mb-md-4 mb-sm-4 mb-3">Reservas</h2>
         </div>
          <div class="cenario container-fluid">
             <?php
                  $Crud=new ClassCrud();
                  $BFetch=$Crud->sqlDB(
                      "sp_reserva_ver",
                      "?, ?, ?",
                      array(2, 1, $_SESSION['id_cliente'])
                  );

                $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
                if($Fetch != false){
                    while($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){
             ?>
              <div class="reserva-ico">
                  <br>
                  <div class="reserva-ico-res">
                      <span><strong>R.nº:</strong><span class="">
                              <?php echo $Fetch['id_reserva']; ?>
                      </span></span>
                  </div>
                  <div class="reserva-ico-qua">
                      <strong>Q.nº:</strong><span class="">
                          <?php echo $Fetch['id_quarto']; ?>
                      </span>
                  </div>
                  <div class="reserva-ico-vazia">

                  </div>
                  <div class="reserva-ico-estado">
                      <span class="">
                          <?php echo $Fetch['estado_res']; ?>
                      </span>
                  </div>
                  <div class="reserva-ico-barra">
                  </div>
                  <div class="reserva-ico-data">
                      <strong>Efetuada em:</strong><span class="">
                          <?php echo $Fetch['data_res']; ?>
                      </span>
                  </div>
                  <div class="reserva-ico-pag">

                  </div>
              </div>
             <?php   
                }
            }else {?>
                <img 
                src="images/ops.png"
                alt="" 
                class="img-fluid rounded mx-auto d-block" 
                style="width: 50%"
                 >
            <?php }?>          
          </div>
      </section>
      <!--//Gallery-->

      <!--//contact -->
      <footer class="contact py-lg-4 py-md-3 py-sm-3 py-3">

      </footer>

      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--  light box js -->
      <script src="js/lightbox-plus-jquery.min.js"> </script> 
      <!-- //light box js-->   
      <!-- testimonial-plugin -->
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function () {
         	$("#owl-demo").owlCarousel({
         		items: 1,
         		lazyLoad: true,
         		autoPlay: true,
         		navigation:false,
         		navigationText: true,
         		pagination: true,
         	});
         });
      </script>
      <!-- //testimonial-plugin -->
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- for-bottom-to-top smooth scrolling -->
      <script>
         $(document).ready(function () {
         	/*
         		var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         		};
         	*/
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         });
      </script>
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
   </script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
   </body>
</html>