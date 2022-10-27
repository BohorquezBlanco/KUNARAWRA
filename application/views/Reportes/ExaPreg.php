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
                    <a href="<?php echo base_url(); ?>index.php/reportes/index" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>GENERALES</a>
                    <a href="<?php echo base_url(); ?>index.php/reportes/index2" class="nav-item nav-link"><i class="fa fa-th me-2"></i>CARRERAS</a>
                    <a href="<?php echo base_url(); ?>index.php/reportes/index3" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>USUARIOS</a>
                    <a href="<?php echo base_url(); ?>index.php/reportes/index4" class="nav-item nav-link"><i class="fa fa-table me-2"></i>BIBLIOGRAFIA</a>
                    <a href="<?php echo base_url(); ?>index.php/reportes/index5" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>ATRAS</a>    
                   
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
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    
    <div class="container">
        <div class="row">
          <h1 class="text-center">CREA TUS PREGUNTAS</h1> <br>
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200"><br>

          <?php echo form_open_multipart('pregunta/crearPregunta'); //apertura de formulario llegando al metodo agregarbase de datos?>

              <div class="row">    
              <div class="col-4 mb-3">
                <label for="">Materia</label>
                  <div class="input-group">
                  <select id="idMateria" name="idMateria" class="form-control form-select form-select-lg" required>
                    <option value="" disabled selected>Materia:  </option> 
                    <?php
                      foreach($infomaterias->result() as $row)
                      {
                    ?>
                    <option value="<?php echo $row->idMateria;?>"><?php echo $row->nombreMateria;?></option>
                    <?php
                      }
                    ?>
                  </select>
                    <input type="submit" value="+" class="btn btn-primary">
                  </div>
                </div>
             <!-- MATERIA EN BASE AL ANTERIOR SELECT -->  
  
                <div class="col-4 mb-3">
                  <label for="">Leccion:</label>
                    <div class="input-group">
                      <select id="idLec" name="idLec" class="form-control form-select form-select-lg">
                      <option value="0">Leccion</option>
                      </select>  
                     <input type="submit" value="+" class="btn btn-primary">
                  </div>
                </div>
                 <!-------------2da Fila----------------->
                 <div class="col-12 mb-3"> 
                  <label for="exampleFormControlTextarea1" class="form-label">Pregunta:</label>
                  <textarea name="pregunta" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <!-------------3era Fila----------------->
                <div class="col-7 mb-3">
                <label for="">Inciso "A"</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Inciso 'A'"
                      name="A"
                    />
                </div>

                <div class="col-7 mb-3">
                <label for="">Inciso "B"</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Inciso 'A'"
                      name="B"
                    />
                </div>

                <div class="col-7 mb-3">
                <label for="">Inciso "C"</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Inciso 'A'"
                      name="C"
                    />
                </div>

                <div class="col-7 mb-3">
                <label for="">Inciso "D"</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Inciso 'A'"
                      name="D"
                    />
                </div>

                <div class="col-7 mb-3">
                <label for="">LA CORRECTA ES :</label>
                    <select name="correcta" id="correcta" class="form-select form-select-md">
                      <option selected>La correcta es:</option>
                      <option name="correcta" value="A">Inciso A</option>
                      <option name="correcta" value="B">Inciso B</option>
                      <option name="correcta" value="C">Inciso C</option>
                      <option name="correcta" value="D">Inciso D</option>
                    </select>
                </div>
                <div class="row col-12">
                  <button type="submit" value="Send Message" class="btn btn-primary">
                  Crear Pregunta
                  </button>
                </div>    
              </div>
              
              <?php form_close() ;?>

          </div>
        </div>
      </div>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Footer End -->
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
</body>

</html>
<script type="text/javascript">   
            $(document).ready(function() {                       
                $("#idMateria").change(function() {
                    $("#idMateria option:selected").each(function() {
                        idMateria = $('#idMateria').val();
                        $.post("<?php echo base_url(); ?>index.php/Pregunta/selectLec", {
                            idMateria : idMateria
                        }, function(data) {
                            $("#idLec").html(data);
                        });
                    });
                });
            });
            
</script>