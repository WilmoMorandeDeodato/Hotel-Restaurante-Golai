<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="pt-pt">
   <head>
      <title>404</title>
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
      <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="../css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--clients-->
      <link href="../css/owl.carousel.css" rel="stylesheet">
      <!--//clients-->
      <!--Gallery hover-->
      <link rel="stylesheet" type="text/css" href="../css/set1.css" />
      <!--//Gallery hover-->
      <!--lightbox slider-->
      <link rel="stylesheet" href="../css/lightbox.css">
      <!-- lightbox slider-->
      <!--stylesheets-->
      <link href="../css/style.css" rel='stylesheet' type='text/css' media="all">

      <link href="../css/stylus.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="..///fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
   </head>
       <body>

       <header class="cabecalho container-fluid">
           <p class="">
              <strong>404 -</strong>  A página não foi encontrada ou você não possui autorização para acede-la
           </p>
       </header>
       <nav class="palco container-fluid">
           <div class="text-center">
               <img src="../images/404.png" alt="" class="img-fluid rounded mx-auto d-block" style="width: 20%">
           </div>
       </nav>
       <footer class="rodape">
            <div class="text-center">
               <a href="../index.php">
               <button class="btn btn-outline-warning" type="submit" name="btn-comentar">Voltar a página inicial</button>
               </a>
           </div>
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
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
   </body>
</html>