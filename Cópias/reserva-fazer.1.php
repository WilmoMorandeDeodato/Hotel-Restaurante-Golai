<?php include('include/header.php');?>
      <!--About-->
      <section class="about" id="about">
         
      </section>
      <!-- //about-->
      <!--stats-->

         <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Reservar quarto</h3>


         <form name="FormCadastro" id="FormCadastro" method="post" action="reserva-fazer.php">
            <?php include 'controllers/reserva.php'; ?>
            <div class="form-row">
            <div class="col">
               <input type="number" class="form-control form_input_transparence btn-outline-light" placeholder="Valor" name="inp-valor">
            </div>
            <div class="col">
               <input type="text" class="form-control form_input_transparence btn-outline-light" placeholder="Via" name="inp-via">
            </div>
         </div>
         <br>
         <button class="btn btn-outline-warning" type="submit" name="btn-fazer-reserva">Reservar</button>
      </form>

 
      <!--//chamada do footer -->
      <?php include'include/footer.php'; ?>
</html>