    <!-- Header Start -->
    <div class="container-fluid bg-primary py-2 mb-2 page-header">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">CARRERAS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <a href="<?php echo base_url(); ?>index.php/Carrera/formcarrera" class="btn btn-primary py-4 px-lg-5 fs-5 ">AGREGAR CARRERA</a> 
                <?php 
                 $indice=1;
                    foreach($carrera -> result() as $row)
                    {
                ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url(); ?>img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                           
    <?php echo form_open_multipart('Carrera/modificar'); ?>
     <input type="hidden" name="idcarrera" value="<?php echo $row->idCarrera; ?>"> <!--Nombre de la tabla-->
     <input type="submit" name="buttony" value="MODIFICAR" class="btn btn-success btn-xs" >
     <?php echo form_close(); ?>

     <?php echo form_open_multipart('Carrera/deshabilitarbd'); ?>
    <input type="hidden" name="idcarrera" value="<?php echo $row->idCarrera; ?>"> <!--Nombre de la tabla-->
    <input type="submit" name="buttonz" value="DESHABILITAR" class="btn btn-warning btn-xs">
    <?php echo form_close(); ?>

    <?php echo form_open_multipart('materia/index');//ir a select de materias?>
    <input type="hidden" name="idcarrera" value="<?php echo $row->idCarrera; ?>"> <!--Nombre de la tabla-->
    <input type="submit" value="MATERIAS" class="btn btn-primary btn-xs">
    <?php echo form_close(); ?>

                            </div>
                        </div>
                        <div class="text-center p-2 pb-0">
                            <h4 class="mb-2"> <?php echo $row->nombreCarrera; ?></h4>
                            <p><?php echo $row->descripcion; ?></p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
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