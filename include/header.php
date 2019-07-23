<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php

include('include/verifica-logado.php');
#include("controllers/recaptcha.php");

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


           </div>
        </div>
     </div>
  </div>
  <!-- //banner -->