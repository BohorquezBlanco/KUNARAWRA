

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">USUARIOS ADMINISTRADORES</h1>
   
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

  <!-- Muestra de SELECT TABLA "TODOS LOS USUARIOS INSCRITOS"-->
  <div class="container">
<div class="col-row-12 table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>

      <th scope="col">Correo</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $indice=1;
    foreach($usuario -> result() as $row)
      {
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
 
      <td><?php echo $row->correo; ?></td>
      <!--MODIFICAR-->
      <td>
     <?php echo form_open_multipart('usuarios/modificar'); ?>
     <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>"> <!--Nombre de la tabla-->
     <input type="submit" name="buttony" value="Modificar" class="btn btn-success btn-xs">
     <?php echo form_close(); ?>
     </td> 
     <!--Eliminacion logica-->   
    <td>
    <?php echo form_open_multipart('usuarios/deshabilitarbd'); ?>
    <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>"> <!--Nombre de la tabla-->
    <input type="submit" name="buttonz" value="Eliminar" class="btn btn-warning btn-xs">
    <?php echo form_close(); ?>
    </td>
     </tr> 
   
      
  <?php
    $indice++;
      }
  ?>


  
    
  </tbody>
</table>
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