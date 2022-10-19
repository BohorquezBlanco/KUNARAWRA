<input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
 <h1 >Login: <?php echo $this->session->userdata('idusuario'); ?></h1>

    

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">VAMOS A REFORZAR :D</h6>
                <h1 class="mb-5">Mis Materias</h1>
            </div>
            <div class="row g-3">
            <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
         
                <?php 
                 $indice=1;
                    foreach($materiaI -> result() as $row)
                    {
                ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url(); ?>img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">

            <!-- VER MATERIAS (aqui iremos a ver las materias al que se puede inscribir)-->               
                <?php echo form_open_multipart('inscripcion/avanceVideos');?>
                <input type="text" name="idMateria" value="<?php echo $row->idMateria; ?>"> <!--Nombre de la tabla-->
                <input type="text" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                <input type="submit" value="VAMOS A REFORZAR" class="btn btn-primary btn-xs">            
                <?php echo form_close(); ?>
            <!-- VER MATERIAS "FIN" -->  

                            </div>
                        </div>
                        <div class="text-center p-2 pb-0">
                            <h4 class="mb-2"> <?php echo $row->nombreMateria; ?></h4>
                            <p><?php echo $row->descripcion; ?></p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
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
            </div>
        </div>
    </div>
    <!-- Categories Start -->




  


