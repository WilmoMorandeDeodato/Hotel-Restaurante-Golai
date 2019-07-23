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
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
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
                           <a href="Hotel/hotel-home-page.php">
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
                           <h4>xxx</h4>
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
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Novo Funcionário</h3>
            <div class="contact-us">
               <form action="perfil-cad-func.php" method="post">
                  <?php include('controllers/ctl-perfil-cad-func.php');?>
                  <div class="row contact-grid">


                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <input type="text" class="form-control" name="inp-nome" placeholder="Name" required="">
                     </div>



                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <input type="text" class="form-control" name="Last inp-nbi" placeholder="B.I" required="">
                     </div>



                     <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <input type="text" class="form-control" name="inp-tel1" placeholder="Primeiro telefone" required=""> 
                     </div>



                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <input type="text" class="form-control" name="inp-tel2" placeholder="Segundo telefone" required="">
                     </div>



                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <input type="text" class="form-control" name="inp-data-nasc" placeholder="Data de nascimento" required="">
                     </div>



                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">
                        <?php 
                        
                        $cargo        = new ClassCrud();
                        $resultSet    = $cargo->sqlDB(
                              'sp_cargo_ver',
                              '?',
                              array(
                                 1
                              )  
                        );
                        ?>
                        <select class="custom-select" name="inp-cargo">
                           <option selected>Seleciona o cargo</option>
                            <?php while($dadosCargo = $resultSet->fetch(PDO::FETCH_ASSOC)) { ?>
                           <option value="<?php echo $dadosCargo['id_cargo']; ?>"><?php echo $dadosCargo['cargo']; ?></option>
                        <?php }?>
                        </select>
                     </div>



                     <div class="col-lg-6 col-md-6 col-sm-6 form-group styled-input">

                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="customRadioInline1" name="inp-m" class="custom-control-input">
                           <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="customRadioInline2" name="inp-f" class="custom-control-input">
                           <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                        </div>
                  </div>



                  <div>
                     <div class="click mt-lg-3 mt-2">
                        <input name="btn-cadastrar-func" class="btn btn-outline-warning" type="submit" value="Cadastrar">
                     </div>
                  </div>
               </form>
            </div>
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