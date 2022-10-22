<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Materias</title>
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

<body class="container ">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <br>

    <div class="container ">


    <?php echo form_open_multipart('inscripcion/calificacionEx');?>
        <div class="row justify-content-center">
        
            <?php 
            $indice=0;
            foreach($infoExamen -> result() as $row)
            {
            ?>
                <?php 
                if ($indice==0) { 
                ?>

                    <h4 class="mb-4 text-center"> <?php echo $row->nombreExamen; ?></h4>

                <?php 
                }
                ?>

                                            <!-----preguntas con radio boton---->

                <div class="col-lg-8">
                    <h5><?php echo $row->pregunta; ?> </h5>
                    <div class="form-check">
                    <input class="form-check-input" value="<?php echo'A'.$indice;?>" type="radio" name="respuesta<?php echo $indice;?>" id="<?php echo'A'.$indice;?>">
                    <label class="form-check-label" for="<?php echo'A'.$indice;?>"> A) <?php echo $row->A; ?></label>
                    
                    <input type="hidden" name="correcta[]" value="<?php echo $row->correcta.$indice;?>" > <!--aqui muestra la pregunta correcta-->

                    </div>

                    <div class="form-check">
                    <input class="form-check-input" value="<?php echo'B'.$indice;?>" type="radio" name="respuesta<?php echo $indice;?>" id="<?php echo'B'.$indice;?>">
                    <label class="form-check-label" for="<?php echo'B'.$indice;?>"> B) <?php echo $row->B; ?></label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" value="<?php echo'C'.$indice;?>" type="radio" name="respuesta<?php echo $indice;?>" id="<?php echo'C'.$indice;?>">
                    <label class="form-check-label" for="<?php echo'C'.$indice;?>"> C) <?php echo $row->C; ?></label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" value="<?php echo'D'.$indice;?>" type="radio" name="respuesta<?php echo $indice;?>" id="<?php echo'D'.$indice;?>">
                    <label class="form-check-label" for="<?php echo'D'.$indice;?>"> D) <?php echo $row->D; ?></label>
                    </div>
                </div>
    
              
       
                
                

                                <!-----preguntas con radio boton FIN---->
            
            
   <?php
        $indice++;
        }
        ?>

        </div>
       
     <div class="container">
        <div class=" row justify-content-center">
            <div class="col-8 p-2">
                <input type="hidden" name="contador" value=" <?php echo $indice; ?>"><!--CON ESTO SABREMOS CUANTAS VECES SE RECORRERA EL CICLO FOR ---->
                <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
             



                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      ENVIAR EXAMEN
        </button>

            </div>
        </div>
 
     </div>
     <!-----------------------------------intento de modal---------------------------------------->
  

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Estas seguro de enviar el examen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               se enviaran los resultados
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>

                <button class="btn btn-primary">
                ENVIAR RESPUESTAS
                </button>
            </div>
            </div>
        </div>
        </div>
     <!-----------------------------------FIN intento de modal---------------------------------------->

     <?php form_close() ;?>
   </div>

   



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