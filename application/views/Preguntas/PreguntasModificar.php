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
                    <a href="<?php echo base_url(); ?>index.php/Pregunta/indexExamen" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Examenes</a>
                    
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
                      <h4 class="text-primary">GESTION DE PREGUNTAS</h4> 
                    </div>
                    <img src="<?php echo base_url();?>img/logo.png" alt="">
                 
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container pt-4 px-4">
    

                <div class="row  bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 ">  <br>
                      
                        <?php echo form_open_multipart('pregunta/index');?>
                <div class="row col-12 p-4 ">
                <button type="submit" value="Send Message" class="btn btn-primary col-3">
                        ATRAS
                    </button>
              
                </div> 
            <?php echo form_close() ;?> 
             <h3 class="text-center col-12">MODIFICAR PREGUNTA</h3>
             
    <?php echo form_open_multipart('pregunta/modificarbd'); //apertura de formulario llegando al metodo agregarbase de datos?>
    <form class="row g-3 ">
    <div class="container-xxl py-5">


       <!---###################-BUSQUEDA DE PREGUNTAS :D -######################---->   
       
       <!-------Valores para los foreach :v----------->
       <?php  foreach($pregunta -> result() as $row){
        $idCarrera = $row->idCarrera;
        $nombreCarrera = $row->nombreCarrera;

        $idMateria=$row->idMateria;
        $nombreMateria=$row->nombreMateria;

        $idLeccion=$row->idLeccion;
        $nombreLeccion=$row->nombreLeccion;

        ?>
         
        <?php  }?>
       <!-------Fin de los valores de los foreach :V-->


       <div class="row">
            <div class="col-12">
          
       
                <div class="row">
                    <div class="col-4 mb-3">
                    <label for="">CURSO:</label>
                        <div class="input-group">
                            <select id="idCarrera" name="idCarrera" class="form-control form-select form-select-lg" required>
                              
                                <option selected value="<?php echo $idCarrera;?>"><?php echo $nombreCarrera;?></option> 
                    
                                
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
             <!-- MATERIA EN BASE AL ANTERIOR SELECT -->  
                    <div class="col-4 mb-3">
                        <label for="">MATERIA:</label>
                        <div class="input-group">
                            <select id="idMateria" name="idMateria" class="form-control form-select form-select-lg" required>
                            <option selected value="<?php echo $idMateria;?>"><?php echo $nombreMateria;?></option>
                            </select>  
                        </div>
                    </div>
             <!-- LECCION EN BASE AL ANTERIOR SELECT -->  
                    <div class="col-4 mb-3">
                        <label for="">LECCION:</label>
                        <div class="input-group">
                            <select id="idLeccion" name="idLeccion" class="form-control form-select form-select-lg" required>
                            <option selected  value="<?php echo $idLeccion;?>"><?php echo $nombreLeccion;?></option>
                            </select>  
                        </div>
                    </div>
              </div>

            </div>
        </div>
     <!---###################-FIN DE BUSQUEDA DE PREGUNTAS D:-######################---->  



    <div class="container">
        <div class="row g-4 justify-content-center">
       
                <?php 
           
                    foreach($pregunta -> result() as $row)
                    {
                ?>
            <div class="col-lg-10 col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="container bg-white border"> <br>
                        <p class="text-primary text-end"><?php echo $row->nombreMateria;  ?></p> 
                        <p class="text-primary text-end"><?php echo $row->nombreLeccion;  ?></p> 
                       
                      
                        <textarea name="pregunta" class="form-control" id="validationTextarea" placeholder="Se requiere una pregunta" required>
                        <?php echo $row->pregunta; ?>
                        </textarea>  <br>                      
                        <h6>A) <input type="text" name="A" value="<?php echo $row->A; ?>" class="h6" required> </h6>
                        <h6>B) <input type="text" name="B" value="<?php echo $row->B; ?>" class="h6" required> </h6>
                        <h6>C) <input type="text" name="C" value="<?php echo $row->C; ?>" class="h6" required></h6>
                        <h6>D) <input type="text" name="D" value="<?php echo $row->D; ?>" class="h6" required></h6>
                        <input type="hidden" name="idPregunta" value="<?php echo $row->idPregunta; ?>" class="h6" >

                        <label for="">LA CORRECTA ES :</label>
                            <select name="correcta" id="correcta" class="form-select form-select-md" required>
                                <option selected value="<?php echo $row->correcta; ?>"><?php echo $row->correcta; ?></option>
                                <option name="correcta" value="A">Inciso A</option>
                                <option name="correcta" value="B">Inciso B</option>
                                <option name="correcta" value="C">Inciso C</option>
                                <option name="correcta" value="D">Inciso D</option>
                            </select>
                            <br>
                        </div>

    
                    </div>
                    <br>
                    <button class="btn btn-primary col-12 text-center">
    MODIFICAR
</button>
   
                </div>
<?php  }?>
   </div>
   </div>
</div>
</form>  
<?php echo form_close() ;?> 

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
<!---SCRIPT PARA SELECCIONAR MATERIAS---->
<script type="text/javascript">   
            $(document).ready(function() {                       
                $("#idCarrera").change(function() {
                    $("#idCarrera option:selected").each(function() {
                        idCarrera = $('#idCarrera').val();
                        $.post("<?php echo base_url(); ?>index.php/Pregunta/selectMateria", {
                            idCarrera : idCarrera 
                        }, function(data) {
                            $("#idMateria").html(data);
                        });
                    });
                });
            });
            
</script>
<script type="text/javascript">   
            $(document).ready(function() {                       
                $("#idMateria").change(function() {
                    $("#idMateria option:selected").each(function() {
                        idMateria = $('#idMateria').val();
                        $.post("<?php echo base_url(); ?>index.php/Pregunta/selectLec2", {
                            idMateria : idMateria 
                        }, function(data) {
                            $("#idLeccion").html(data);
                        });
                    });
                });
            });
            
</script>