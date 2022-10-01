<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preguntas de cada leccion</title>
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

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
      
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>KUNARAWRA</h3>
 
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
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/index" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Preguntas</a>
                   
                    <?php echo form_open_multipart('Pregunta/NuevaPregunta');?>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/NuevaPregunta" class="nav-item nav-link" ><i class="fa fa-th me-2"></i>Nueva Pregunta</a>
                    <?php echo form_close();?>


                    <?php 
                    echo form_open_multipart('Pregunta/ListadoPregunta');
                    ?>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/ListadoPregunta" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Lista Preguntas</a>
                    <?php 
                    echo form_close();
                    ?>

                    <?php echo form_open_multipart('Pregunta/Examen');?>
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/Examen" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Crear Examen</a>
                    <?php echo form_close();?>

                               <!--TE LLEVARA ATRAS DONDE ESTA ADMI CONTROL-->
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/Atras" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Atras</a>
                  
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
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
            <div class="container pt-4 px-4">
                <div class="row  bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 ">  <br>
                        <h3 class="text-center">Preguntas Creadas</h3>
                        <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <a href="<?php echo base_url(); ?>index.php/Pregunta/NuevaPregunta" class="btn btn-primary py-4 px-lg-5 fs-5 col-5 m-2">AGREGAR PREGUNTAS</a> 
            <a href="<?php echo base_url(); ?>index.php/Pregunta/NuevaPregunta" class="btn btn-primary py-4 px-lg-5 fs-5 col-5 m-2">PREGUNTAS ELIMINADAS</a> 

                <?php 
           
                    foreach($pregunta -> result() as $row)
                    {
                ?>
            <div class="col-lg-10 col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="container bg-white border"> <br>
                        <h5><?php echo $row->pregunta; ?></h5>
                        <h6>A) <?php echo $row->A; ?></h6>
                        <h6>B) <?php echo $row->B; ?></h6>
                        <h6>C) <?php echo $row->C; ?></h6>
                        <h6>D) <?php echo $row->D; ?></h6>
                        <h5 class="text-danger">Inciso Correcto: <?php echo $row->correcta; ?></h5> 
                           
                        <div class="input-group text-center justify-content-center ">
                        <?php echo form_open_multipart('Pregunta/modificar'); ?>
                           <input type="hidden" name="idcarrera"  value="<?php echo $row->idPregunta; ?>"> <!--Nombre de la tabla-->
                           <input type="submit" name="buttony" value="MODIFICAR" class="btn btn-success btn-xs" >
                           <?php echo form_close(); ?>

                           <?php echo form_open_multipart('Pregunta/deshabilitarbd'); ?>
                           <input type="hidden" name="idcarrera" value="<?php echo $row->idPregunta; ?>"> <!--Nombre de la tabla-->
                           <input type="submit" name="buttonz" value="ELIMINAR" class="btn btn-warning btn-xs">
                           <?php echo form_close(); ?> <br><br>

                        </div>


                       
                        </div>

    
                    </div>
                </div>
<?php

      }
  ?>
   </div>
   </div>
</div>
   

                    </div>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer End -->
        </div>
        <!-- Content End -->
            <!-- Footer Start -->
     

       
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
</body>

</html>