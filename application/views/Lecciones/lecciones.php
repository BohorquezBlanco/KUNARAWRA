


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-4 mb-4 page-header">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-5 text-white animated slideInDown"><?php echo $this->session->userdata('nombreMateria'); ?></h1>
                    <h2 class="text-white">Lecciones</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-4 justify-content-center">

<?php echo form_open_multipart('leccion/crearLeccion'); //apertura de formulario llegando al metodo modificar?>
      <button class="btn btn-primary" type="submit">CREAR LECCIÓN</button>
<?php echo form_close(); ?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de Leccion</th>
      <th scope="col">Descripcion</th>
      <th scope="col">UrlVideo</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
   <?php 
    $i=0;
    $indice=1;
    foreach($leccion -> result() as $row)
    {
    ?>
      <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombreLeccion; ?></td>
      <td><?php echo $row->descripcion; ?></td>
      <td><?php echo $row->urlVideo; ?></td>
    
      <!--MODIFICAR-->
      <td>
     <?php echo form_open_multipart('leccion/modificar'); ?>
     <input type="hidden" name="idleccion" value="<?php echo $row->idLeccion; ?>"> <!--Nombre de la tabla-->
     
     <input type="submit" name="buttony" value="Modificar" class="btn btn-success btn-xs">
     <?php echo form_close(); ?>
     </td> 
     <!--Eliminacion logica-->   
    <td>
    <?php echo form_open_multipart('leccion/deshabilitarbd'); ?>
    <input type="hidden" name="idleccion" value="<?php echo $row->idLeccion; ?>"> <!--Nombre de la tabla-->
      <input type="hidden" name="idmateria" value="<?php echo $row->idMateria; ?>"> <!--Nombre de la tabla-->
    <input type="submit" name="buttonz" value="deshabilitar "class="btn btn-warning btn-xs">

    <?php echo form_close(); ?>
    </td>
     </tr> 


<?php
    $i++;
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