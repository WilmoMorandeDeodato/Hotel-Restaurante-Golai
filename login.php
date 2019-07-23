<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
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
                  <h1><a class="navbar-brand" href="#">H&R Golai</a></h1>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
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
                     <img src="images/GolaiLogo.png" alt="" class="nosei" style="width: 20%">
                  </p>
                   <form name="FormCadastro" id="FormCadastro" method="post" action="login.php">
                      <?php include 'controllers/recaptcha.php'; ?>
           
                       <div class="form-row">
                        <div class="col">
                           <input type="text" class="form-control form_input_transparence btn-outline-light" placeholder="Telefone ou E-mail" name="inp-telmail">
                        </div>
                        <div class="col">
                           <input type="password" class="form-control form_input_transparence btn-outline-light" placeholder="Palavra-passe" name="inp-senha">
                        </div>
                     </div>
                     <br>
                     <button class="btn btn-outline-warning" type="submit" name="btn-logar">Entrar</button>
                  </form>
                   <div class="container-fluid">
                       <div class="g-recaptcha formata-captcha" data-sitekey="6LftwaoUAAAAAM_29bSgFucUThVNU5-V5u1qGlES"></div>
                   </div>
                   <div class="container-fluid">
                       <a href="cad-cliente.php" style="color:#ffffff;">Não está cadastrado?</a>
                   </div>
         </div>
      </div>


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
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
   </body>
</html>