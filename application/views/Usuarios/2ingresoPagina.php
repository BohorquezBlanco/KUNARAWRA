


<br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ingreso al sistema</h6>
                <h1 class="mb-5">BIENVENIDO</h1>
                <p>Ingrese su cuenta y contraseña o créase una cuenta, es gratis!!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4  col-md-12 wow fadeInUp" data-wow-delay="0.5s">
             
                
                <?php 
                    echo form_open_multipart('usuarios/validar',array('id'=>'form1','class'=>'form-control'))
                ?>

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                   <input type="text" name="login" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">login o nombre de usuario</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Contraseña</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3" type="submit">Ingresar</button>
                            </div>
                            <div class="col-6">
                     
                        </div>  
                <?php 
                    echo form_close();
                ?>

                <?php 
                    echo form_open_multipart('usuarios/inscribirse')
                ?>
                  <button type="submit" class="btn btn-primary w-100 py-3" type="submit">Crearse Una Cuenta</button>
                  <?php 
                    echo form_close();
                ?>
                   
                </div>
                <div class="col-lg-12 wow fadeInUp ">
                    <br>
                    <img src="<?php echo base_url(); ?>img/llama2.png" alt="" height="100%" width="100%">
                </div>
            </div>
            
        </div>
        <br>
        <br>
        <br>
        <br>

          


    


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