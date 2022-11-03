
 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Modificación lección</h6>
                <h1 class="mb-2">EDITAR LECCIÓN</h1>
            </div>
   

                
                <?php
            foreach ($infoleccion->result() as $row)
            {
            echo form_open_multipart('Leccion/modificarbd');  //apertura de formulario llegando al metodo agregarbase de datos
            ?>
             
            <input type="hidden" name="idleccion"  value="<?php echo $row->idLeccion; ?>">
               <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="nombreleccion" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row->nombreLeccion; ?>" required>
                            <label for="name">El numero de leccion es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="descripcion" class="form-control"  placeholder="Your Email" value="<?php echo $row->descripcion; ?>" required>
                            <label for="name">El titulo de la lección es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="urlVideo" class="form-control"  placeholder="Your Email" value="<?php echo $row->urlVideo; ?>" required>
                            <label for="name">La url del video explicativo es:</label>
                        </div>
                    </div>
                    <input type="hidden" name="idmateria" class="form-control"  placeholder="Your Email" value="<?php echo $row->idMateria; ?>" >
                   
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">EDITAR LECCIÓN</button>
                    </div>

                   
                </div>
                <?php 
                echo form_close(); 
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