<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Creacion De Examen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>micssjs/preguntas/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>micssjs/preguntas/css/tempus" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>micssjs/css/bootstrapmin.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>micssjs/preguntas/css/stilo.css" rel="stylesheet">
    
<!-- TEMPLATE STYLE -->
<style>

    .caja2
    {
        height: 380px;
    }
</style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
      
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
 
                </a>
        
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                   
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>PreguntasS</a>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/NuevaPregunta" class="nav-item nav-link" ><i class="fa fa-th me-2"></i>Nueva Pregunta</a>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/ListadoPregunta" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Lista Preguntas</a>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/Examen" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Crear Examen</a>
                               <!--TE LLEVARA ATRAS DONDE ESTA ADMI CONTROL-->
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/Atras" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Atras</a>
                  
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light  px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
              
           
                <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown text-center ">
                      <h4 class="text-primary">  GESTION DE PREGUNTAS</h4> 
                    </div>
                    <img src="<?php echo base_url();?>img/logo.png" alt="">
                 
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
   
  
     <div class="container row">

       <br>
       <div class="container">
        <div class="row">
          <h1 class="text-center">CREACION DE EXAMENES</h1> <br>
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200"><br>
            <form action="#">
              <div class="row">
               
              <div class="col-4 mb-3">
                <label for="">Titulo del Examen</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Escribe un titulo"
                    />
                </div>
                <div class="col-7 mb-3">
                <label for="">Descripcion</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Escribe una descripcion breve"
                    />
                </div>
                
     <!-- PREGUNTAS PARA INCLUIR EN EL EXAMEN--> 

  
      <div class="col-6 ">
        <div class="input-group">
          <svg xmlns="" width="50" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            <form>
              <input class="form-control" type="text" name="txtBuscarPregunta" id="txtBuscarPregunta" placeholder="Buscar" aria-label="Search">
            </form>
        </div>
      </div>
<table class="table table-hover" id="tblListPregunta">
  <thead>
    <tr>
      <th>#</th>
      <th>pregunta</th>
      <th>leccion</th>
      <th>Agregar</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>







<div class="col-6">
</div>

<div class="col-6 m-3 ">
  <div class="table-responsive bg-white overflow-auto caja2">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pregunta</th>
      <th scope="col">Leccion</th>
      <th scope="col">Agregar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $indice=1;
    foreach($pregunta->result() as $row)
      {
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->pregunta; ?></td>
      <td><?php echo $row->nombreLeccion; ?></td>
    
    
     </tr> 
   
      
  <?php
    $indice++;
      }
  ?>


  
    
  </tbody>
</table>
  </div>
</div>
     <!-- PREGUNTAS INCLUIDAS EN EL EXAMEN--> 
<div class="col-5 m-3 ">
  <div class="table-responsive bg-white overflow-auto caja2">
          <table class="table">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pregunta</th>
      <th scope="col">Agregar</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>El mar negro es de bolivia ?</td>
      <td>Otto</td>
      
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>

    </tr>
  </tbody>
          </table>
        </div>
</div>  
    
<div class="col-12 row">
  <button type="submit" value="Send Message" class="btn btn-primary">
    Crear Examen
  </button>
</div> 
        
            </div>

             
            </form>            
          </div>
        </div>
      </div>
    <!-- Buscador -->  


     </div>
    
      
                </div>
            </div>
            <!-- Blank End -->


       
  
        </div>
        <!-- Content End -->


       
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/chart/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>micssjs/preguntas/js/main.js"></script>
    <script src="<?php echo base_url(); ?>micssjs/js/ajax.js"></script>
</body>

</html>