<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KUNARAWRA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon para los iconos -->
    <link href="img/favicon.ico" rel="icon">

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
    <!-- redondito de carga  -->
    <!-- Spinner Start  -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>KUNARAWRA</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Horarios</a>
                <a href="courses.html" class="nav-item nav-link">Cursos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quiero...</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Prepararme al examen de ingreso</a>
                        <a href="testimonial.html" class="dropdown-item">Reforzar mis Conocimientos</a>
                        <a href="404.html" class="dropdown-item">Conocer otros cursos</a>
                    </div>
                </div>

               <div class="p-2 ">
                <img class="rounded-circle " src="https://github.com/mdo.png" alt="" width="52" height="52">
               </div>
               <div class="nav-item dropdown">
                <a href="#" class="nav-link " >Alexander Samuel</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Mi Perfil</a>
                    <a href="testimonial.html" class="dropdown-item">Editar Usuario</a>
   
                </div>
            </div>
                    <a href="#" class="btn btn-primary py-4 px-lg-5 fs-5 ">INGRESAR</a>
            </div>
        
        </div>
    </nav>
    <!-- Navbar End -->

 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Perfil</h6>
                <h1 class="mb-2">Puedes editar la carrera</h1>
            </div>
   
                
                <h5 class="mb-2">Total Carreras</h5> <h5>8</h5> <br> <br>
                <?php
            foreach ($infocarrera->result() as $row)
            {
               echo form_open_multipart('Administrador/modificarbd');  //apertura de formulario llegando al metodo agregarbase de datos
               ?>
             
            <input type="hidden" name="idcarrera"  value="<?php echo $row->idCarrera; ?>">
               <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="nombrecarrera" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row->nombreCarrera; ?>">
                            <label for="name">El nombre de la carrera es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="descripcion" class="form-control"  placeholder="Your Email" value="<?php echo $row->descripcion; ?>">
                            <label for="name">La descripcion de la carrera es:</label>
                        </div>
                    </div>
                   
                    
                   
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">EDITAR CARRERA</button>
                    </div>

                   
                </div>
                <?php 
                 form_close(); 
                 }
                 ?> 

                
        </div>
    </div>
    <!-- Testimonial End -->
        
    



    



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