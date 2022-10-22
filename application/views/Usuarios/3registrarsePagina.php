




<br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
           <!-- inscripcion de cuenta -->
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Crear Cuenta</h6>
                    <h1 class="mb-5">Crearse una cuenta es gratis</h1>
                </div>
                <?php echo form_open_multipart('usuarios/agregarbd'); //apertura de formulario llegando al metodo agregarbase de datos?>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="Nombre" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="validationCustom09" >Escribe tu nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="PrimerApellido" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="validationCustom09">Escribe tu primer apellido</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="SegundoApellido" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="email">Escribe tu segundo apellido</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="Correo" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="email">Escriba su correo</label>
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" name="Password" class="form-control" id="subject" placeholder="Subject" required>
                                <label for="subject">Contraseña</label>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">CREAR UNA CUENTA</button>
                        </div>
                    </div>
                    </form>
                    <?php echo form_close() ;?>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br>

