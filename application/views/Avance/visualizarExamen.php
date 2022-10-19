<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarrerasVista</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <!-- LIBRERIA PARA EL ESTILO-->
<link href="<?php echo base_url(); ?>micssjs/lib/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>micssjs/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- BOOTSTAP.MIN CUSTOMIZADO POR EL TEMPLATE -->
<link href="<?php echo base_url(); ?>micssjs/css/bootstrapmin.css" rel="stylesheet">  

<!-- TEMPLATE STYLE -->
<link href="<?php echo base_url(); ?>micssjs/css/style.css" rel="stylesheet">
</head>

<body>
    


    <!-- Header End -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center"> 
                    <div class="section-heading">
                        <h4 class="text-center">EXAMENES REALIZADOS :D</h4>
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
                            <h5 class="card-title text-center">EXAMEN DE LA LECCION 1</h5>
                            <p class="card-text">REALIZADO POR: <?php echo $row->nombre; ?> <?php echo $row->primerApellido; ?></p>
                            <p class="card-text">CALIFICACIÓN: <?php echo $row->calificacion; ?></p>
                            <p class="card-text">ESTADO:<?php echo $row->aprorepro; ?></p>
                            <p class="card-text">DIFICULTAD: <?php echo $row->dificultad; ?></p>
                            <br>

                            <?php echo form_open_multipart('Inscripcion/verExamen'); ?>
                            <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                            <input type="submit" name="buttonz" value="RESOLVERLO OTRA VEZ :D" class="btn btn-warning btn-xs">
                            <?php echo form_close(); ?>
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