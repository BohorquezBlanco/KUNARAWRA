




<div class="container">
<div class="col-row-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Nota</th>
    </tr>
  </thead>
  <tbody>



  <?php 
  $indice=1;
    foreach($estudiantes -> result () as $row)
      {
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
      <td><?php echo $row->nota; ?></td>
    </tr>
    
  <?php
    $indice++;
      }
  ?>

    
  </tbody>
</table>
</div>
</div>



