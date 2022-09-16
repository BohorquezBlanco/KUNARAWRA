

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
                    <a href="<?php echo base_url(); ?>index.php/Carrera/index">
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

                <!---INGRESAR A LA CREACION DE PREGUNTAS--->
                <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.7s">
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/index">
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


