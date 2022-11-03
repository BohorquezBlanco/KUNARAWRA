
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0  navbar-fixed-top">
        <a href="<?php echo base_url(); ?>index.php/usuarios/index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>KUNARAWRA</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url(); ?>index.php/usuarios/AreaAdm" class="nav-item nav-link">INICIO</a>
                <a href="<?php echo base_url(); ?>index.php/Carrera/index" class="nav-item nav-link ">CARRERA</a>
                
                <?php 
                    echo form_open_multipart('materia/index')
                ?>
                    <input type="hidden" name="idcarrera" value="<?php echo $this->session->userdata('idCarrera'); ?>"> <!--Nombre de la tabla-->
                    <input type="hidden" name="nombreCarrera" value="<?php echo $this->session->userdata('nombreCarrera'); ?>"> <!--Nombre de la tabla-->

                <button type="submit" class="btn btn-outline-link nav-item nav-link " ><a>MATERIAS</a></button>
                <?php 
                    echo form_close();
                ?>

                <?php 
                    echo form_open_multipart('leccion/index')
                ?>
                    <input type="hidden" name="nombreMateria" value="<?php echo $this->session->userdata('nombreMateria'); ?>"> <!--Nombre de la tabla-->
                    <input type="hidden" name="idMateria" value="<?php echo $this->session->userdata('idMateria'); ?>"> <!--Nombre de la tabla-->

                <button type="submit" class="btn btn-outline-link nav-item nav-link active" > <a>LECCIONES</a> </button>
                <?php 
                    echo form_close();
                ?>
                   
                <a href="<?php echo base_url(); ?>index.php/usuarios/logout" class="btn btn-primary py-4 px-lg-5 fs-5 ">CERRAR SESIÓN</a>
            </div>
        
        </div>
    </nav>
    <!-- Navbar End -->

