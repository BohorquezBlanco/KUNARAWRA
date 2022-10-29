


    <!-- Header End -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center"> 
                    <div class="section-heading">
                        <h4 class="text-center">EXAMENES GLOBALES REALIZADOS</h4>
                        <p class="text-center">PUEDES VOLVERLOS A RESOLVER :D</p>
                        <div class="line"></div>
                    </div>  
                <?php 
                    $indice=1;
                    foreach($infoexamenes -> result() as $row)
                    {
                ?>  
                  <!-- Section Heading -->
                         
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card text-bg-dark">
                    <img src="<?php echo base_url(); ?>img/resultado.jpg" class="card-img " alt="..." height="450px">
                        <div class="card-img-overlay p-4">
                            <h5 class="card-title text-center"><?php echo $row->nombreExamen; ?> </h5>
                            <p class="card-text h5"> <?php echo $row->descripcion ;?></p><br>
                            <p class="card-text h4">CALIFICACIÓN: <?php echo $row->calificacion ;?></p>
                            <p class="card-text h4">ESTADO: <?php echo $row->aprorepro;?></p>
                            <br>

                            <?php echo form_open_multipart('Inscripcion/UPDATE'); ?>
                            <input type="text" name="idExamen" value="<?php echo $row->idExamen; ?>">
                            <input type="text" name="idLeccion" value="<?php echo $row->idLeccion; ?>">
                            <input type="text" name="idMateria" value="<?php echo $row->idMateria; ?>">
                            <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                            <input type="submit" name="buttonz" value="VOLVER A RESOLVER" class="btn btn-warning btn-xs">
                            <?php echo form_close(); ?> <br>
                        </div>
                    </div>
                </div>

                <?php
    $indice++;
      }
  ?>
   </div>
   </div>
</div>
   


     



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/lib/owlcarousel/carouselmin.js"></script>

    <!-- Template Javascript -->
    <script  src="<?php echo base_url(); ?>micssjs/js/main.js"  ></script> 
</body>

</html>