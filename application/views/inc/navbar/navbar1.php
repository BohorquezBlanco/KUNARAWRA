
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?php echo base_url(); ?>index.php/usuarios/index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>KUNARAWRA</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url(); ?>index.php/usuarios/index" class="nav-item nav-link active">Inicio</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quiero...</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?php echo base_url(); ?>index.php/usuarios/ingresar" class="dropdown-item">Prepararme al examen de ingreso</a>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/ingresar" class="dropdown-item">Reforzar mis Conocimientos</a>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=+59175999620&text=Hola%20quiero%20....%20:D" target="_blank" class="nav-item nav-link">Contactanos :D</a>
                    <a href="<?php echo base_url(); ?>index.php/usuarios/ingresar" class="btn btn-primary py-4 px-lg-5 fs-5 ">INGRESAR</a>
            </div>
        
        </div>
    </nav>
    <!-- Navbar End -->
