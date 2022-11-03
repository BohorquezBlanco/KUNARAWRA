
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
                <a href="<?php echo base_url(); ?>index.php/usuarios/AreaAdm" class="nav-item nav-link">Inicio</a>
                <a href="<?php echo base_url(); ?>index.php/Carrera/index" class="nav-item nav-link active">CARRERA</a>
                
                <?php 
                    echo form_open_multipart('inscripcion/misCursos')
                ?>
                <button type="submit" class="btn btn-outline-link nav-item nav-link disabled" ><a>MATERIAS</a></button>
                <?php 
                    echo form_close();
                ?>

                <?php 
                    echo form_open_multipart('inscripcion/misCursos')
                ?>
                <button type="submit" class="btn btn-outline-link nav-item nav-link disabled" ><a>LECCIONES</a></button>
                <?php 
                    echo form_close();
                ?>
                   
                <a href="<?php echo base_url(); ?>index.php/usuarios/logout" class="btn btn-primary py-4 px-lg-5 fs-5 ">CERRAR SESIÓN</a>
            </div>
        
        </div>
    </nav>
    <!-- Navbar End -->
