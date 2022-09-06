

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Usuarios Registrados</h1>
                    <p class="text-white">Muestra todos los usuarios registrados en la plataforma</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Noticias</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Jose Luis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

  <!-- Muestra de SELECT TABLA "TODOS LOS USUARIOS INSCRITOS"-->
  <div class="container">
<div class="col-row-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Tipo</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminacion Logica</th>
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
      <td><?php echo $row->tipo; ?></td>
      <td><?php echo $row->correo; ?></td>
      <td><?php echo $row->password; ?></td>
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
    <input type="submit" name="buttonz" value="deshabilitar "class="btn btn-warning btn-xs">
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







    