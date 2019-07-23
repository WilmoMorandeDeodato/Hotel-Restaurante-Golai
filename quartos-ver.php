<?php include('include/header.php');?>
      <!--About-->
      <section class="about" id="about">

      </section>
      <!-- //about-->
      <!--stats-->

         <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Nossos quartos</h3>
            <?php
                  $Crud=new ClassCrud();
                  $BFetch=$Crud->sqlDB(
                      "sp_quarto_ver",
                      "?, ?",
                      array(1, 1)
                  );

             while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)):

             ?>
               <div class="quarto-organiza team-grid col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <!-- team-img -->
                  <div class="team-block mb-lg-4 md-b-md-4 mb-sm-4 mb-3">
                     <div class="team-img">
                        <img src="images/t1.jpg" alt="" class="img-fluid">
                        <div class="team-content">
                           <h4 class="text-white mb0">
                            <?php echo 'Tipo de quarto: '. $Fetch['tipo_qua']; ?>
                           </h4>
                           <p class="team-meta">
                           <?php echo 'Nº: '.$Fetch['id_quarto']; ?>
                           </p>
                        </div>
                        <div class="overlay">
                           <div class="text">
                              <h4 class="mb0 "><?php  echo 'Tipo de quarto: '. $Fetch['tipo_qua']; ?></h4>
                              <p class="my-2 team-meta"><?php echo 'Nº: '.$Fetch['id_quarto']; ?></p>
                              <p>Outras informações </p>
                              <div class="bottom-social mt-lg-4 mt-md-3 mt-2">
                                 <ul>
                                    <li>
                                       <a href="reserva-fazer.php?idq=<?php echo $Fetch['id_quarto']; ?>">
                                          <span class="">
                                             Reservar quarto
                                          </span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.team-img -->
             <?php endwhile; ?>

      </section>
      <!-- //team-->


      </section>
      <!-- //stats-->
 
      <!--//chamada do footer -->
      <?php include'include/footer.php'; ?>
</html>