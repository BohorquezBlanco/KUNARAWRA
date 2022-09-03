<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrador</title>
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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link active">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Area Administrativa</h1>
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


    <!--AREA ADMINISTRATIVA DE USUARIOS -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?php echo base_url(); ?>index.php/usuarios/UsuariosPanel">
                       <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Estudiantes</h5>
                            <p>En esta seccion podra inscribir alumnos,ver los alumnos inscritos,editar y eliminar</p>
                        </div>
                    </div> 
                    </a>
                    
                </div>
      
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="">
                      <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Educadores</h5>
                            <p>En esta seccion podra inscribir a los educadores editarlos o eliminarlos</p>
                        </div>
                    </div>  
                    </a>
                    
                </div>
                  <!--AREA ADMINISTRATIVA DE CARRERAS Y MATERIAS -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="<?php echo base_url(); ?>index.php/administrador/index">
                       <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book  text-primary mb-4"></i>
                            <h5 class="mb-3">Carreras y materias</h5>
                            <p>Aqui podra gestionar las carrearas y materias</p>
                        </div>
                    </div> 
                    </a>
                    
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a href="">
                         <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Libros y Textos</h5>
                            <p>Aqui podra añadir,ver y editar los libros si es necesario</p>
                        </div>
                    </div>
                    </a>
                   
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.7s">
                    <a href="">
                        <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-clipboard text-primary mb-4"></i>
                            <h5 class="mb-3">Preguntas</h5>
                            <p>Aqui podra crear las preguntas de cada tema y de los examenes</p>
                        </div>
                    </div>
                    </a>
                    
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.7s">
                    <a href="">
                        <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x  fa-paperclip text-primary mb-4"></i>
                            <h5 class="mb-3">Estadisticas y Reportes</h5>
                            <p>Aqui podra crear las preguntas de cada tema y de los examenes</p>
                        </div>
                    </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



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