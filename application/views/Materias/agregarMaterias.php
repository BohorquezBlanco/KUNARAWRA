<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AgregarMaterias</title>
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
    <div class="container-fluid bg-primary py-2 mb-2 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Materias</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
   
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
    <div class="container-xxl py-5">
           <!-- inscripcion de cuenta -->
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Crear Cuenta</h6>
                    <h1 class="mb-5">Crea una materia</h1>
                </div>
                <?php echo form_open_multipart('materia/agregarbd'); //apertura de formulario llegando al metodo agregarbase de datos?>
                      
                <div class="row g-3">
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="nombremateria" class="form-control" id="name" placeholder="Your Name">
                                <label for="name" >Escribe la materia</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="descripcionmateria" class="form-control" id="email" placeholder="Your Email">
                                <label for="name">Escribe su descripcion</label>
                            </div>
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <div class="form-floating">
                            
 
 
  <select name="idCarrera" class="form-control form-select form-select-lg" required>
    <option value="" disabled selected>Seleccione una...  </option> 
   <?php
    foreach($infocarreras->result() as $row)
    {
      ?>
      <option value="<?php echo $row->idCarrera;?>"><?php echo $row->nombreCarrera;?></option>
      <?php
    }
    ?>
    </select>


 
                            </div>
                        
                          
                        </div>
                       
                      
            
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">CREAR CARRERA</button>
                        </div>
                    </div>
                  
                    <?php form_close() ;?>
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