<footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row ">
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3"><a href="index.html">Sobre nós</a></h4>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p>
                           Hotel situado na encosta do ramiro (Luanda), de 3 estrelas construido em 2017, pertencente ao grupo de hoteis expansivos ibis. O hotel tem uma expansão grande que já se encontra em 4 provincias do país.
                     </p>
                  </div>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p>Também estamos nas redes sociais abaixo</p>
                  </div>
                  <div class="bottom-social pt-2">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Horário de atendimento</h4>
                  <div class="wls-hours-list">
                     <ul>
                        <li class="d-flex">Segunda   <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Terça     <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Quarta    <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Quinta    <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Sexta     <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Sábado    <span class="time ml-auto"> 9:30-18:30</span></li>
                        <li class="d-flex">Domingo   <span class="time ml-auto">     fechado</span></li>
                     </ul>
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <div class="wls-hours-list">
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Avalia-nos</h4>
                  <div class="wls-hours-list">
                     <form name="FormComentario" id="FormComentario" method="post" action="index.php">
                        <div class="form-group">
                           <input type="text" class="form-control" name="inp-nome" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o seu nome">
                        </div>
                        <div class="form-group">
                           <textarea class="form-control" name="inp-comentario" id="exampleFormControlTextarea1" rows="2" placeholder="Digite o seu comentário"></textarea>                        </div>
                        <br>
       
                        <button class="btn btn-outline-warning g-recaptcha" type="submit"
                         name="btn-comentar" data-sitekey="6LfbZ6sUAAAAAIvWf3d7CjJIpl4z_lUusRZW8KD8"
                         data-callback="onSubmit" >Comentar</button>
                     </form>
                     <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
                  </div>
               </div>
            </div>
         </div>
         <div class="copy-agile-right text-center text-white py-2">
            <p> 
               © 2019 Golai. Todos os direitos reservados | Desenhado por <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!--//footer-->
      <!--js working-->
      <script src='Hotel/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--  light box js -->
      <script src="Hotel/js/lightbox-plus-jquery.min.js"> </script> 
      <!-- //light box js-->   
      <!-- testimonial-plugin -->
      <script src="Hotel/js/owl.carousel.js"></script>
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
      <script src="Hotel/js/jquery.waypoints.min.js"></script>
      <script src="Hotel/js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="Hotel/js/move-top.js"></script>
      <!--bootstrap working-->
      <script src="Hotel/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
      <script src="Hotel/js/easing.js"></script>
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
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
   </body>