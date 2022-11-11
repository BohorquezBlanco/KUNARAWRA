

 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Perfil</h6>
                <h1 class="mb-2">Puedes editar la carrera</h1>
            </div>
   
            <br><br>
          
                
                <?php
            foreach ($infocarrera->result() as $row)
            {
            echo form_open_multipart('Carrera/modificarbd');  //apertura de formulario llegando al metodo agregarbase de datos
            ?>
             
            <input type="hidden" name="idcarrera"  value="<?php echo $row->idCarrera; ?>">
               <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="nombrecarrera" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row->nombreCarrera; ?>" required>
                            <label for="name">El nombre de la carrera es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="descripcion" class="form-control"  placeholder="Your Email" value="<?php echo $row->descripcion; ?>" required>
                            <label for="name">La descripcion de la carrera es:</label>
                        </div>
                    </div>
                   
                    
                   
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">EDITAR CARRERA</button>
                    </div>

                   
                </div>
                <?php 
                 form_close(); 
                 }
                 ?> 

                
        </div>
    </div>
    <!-- Testimonial End -->
        
    



    



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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