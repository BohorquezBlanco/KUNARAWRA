<!--CREACION DEL HEADER-->
<header class="container">
        <!--CREACION DE BARRA DE NAVEGACION-->
        <nav class=" navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
          
              <a class="navbar-brand" href="#">
                <img src="<?php echo base_url();?>img/logo.png" alt="" width="50px" height="50px" class="d-inline-block align-text-top">
             
              </a>
            <a class="navbar-brand"  href="<?php echo base_url();?>index.php/usuarios/index">KUNA RAWRA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>index.php/usuarios/ingresar">Ingresar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/inscribirse">Inscribirse</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    QUIERO...
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Prepararme para el examen de ingreso</a></li>
                    <li><a class="dropdown-item" href="#">Prepararme para examen psicotecnico</a></li>
                    <li><a class="dropdown-item" href="#">Fortalecer mis conocimientos</a></li>
                  </ul>
                </li>
               
              </ul>
              <img src="<?php echo base_url();?>img/llama2.png" alt="" width="450px" height="50px" class="d-inline-block align-text-top ">
             
            </div>
          </div>
        </nav>
  </header>