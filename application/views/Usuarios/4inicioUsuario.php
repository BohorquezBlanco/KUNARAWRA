

    



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo base_url(); ?>img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Sea bienvenido</h6>
                    <h1 class="mb-4">Bienvenido a Kunarawra</h1>
                    <p class="mb-4">Aqui podra pasar cursos para reforzar su aprendizaje para asi poder nivelarse academicamente y pasar el examen de ingreso</p>
                    <p class="mb-4">podra encontrar un monton de materias a reforzar , para ello solo de click a una materia que vea necesaria e inscribase :D</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Costo bajo</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Clases Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Videos explicativos de cada tema</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ejercicios de reforzamiento</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Banco de Examenes pasados</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Aprende a tu ritmo :D</p>
                        </div>
                    </div>

                    <div class="input-group ">
<!--*********************AQUI ENTRARE A VER MIS CURSOS A LOS QUE ESTOY INSCRITO******************-->
                    <div class="p-2">
                        <?php echo form_open_multipart('Inscripcion/misCursos'); ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                        <input type="submit" name="buttonz" value="MIS CURSOS :D" class="btn btn-primary btn-xs">
                        <?php echo form_close(); ?>    
                    </div>
                <div class="p-2">
                 <!--*********************AQUI ENTRARE A VER MIS CURSOS A LOS QUE ESTOY INSCRITO******************-->

<!--*********************AQUI ENTRARE A VER MIS CURSOS A LOS QUE ESTOY INSCRITO******************-->
                        <?php echo form_open_multipart('Inscripcion/explorar'); ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                        <input type="submit" name="buttonz" value="EXPLORAR CURSOS :D" class="btn btn-primary btn-xs">
<!--*********************AQUI ENTRARE A VER MIS CURSOS A LOS QUE ESTOY INSCRITO******************-->
                        <?php echo form_close(); ?>   
                </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <!-- About End -->


   




  


