    
    <div class="container-xxl py-5">
           <!-- inscripcion de cuenta -->
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Creación de materias</h6>
                    <h1 class="mb-5">CREAR MATERIAS PARA EL CURSO</h1>
                </div>
                <?php echo form_open_multipart('materia/agregarbd'); //apertura de formulario llegando al metodo agregarbase de datos?>
                      
                <div class="row g-3">
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input style="text-transform:uppercase;" type="text" name="nombremateria" class="form-control" id="name" placeholder="Your Name" required>
                                <label for="name" >Nombre de la materia</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input style="text-transform:uppercase;" type="text" name="descripcionmateria" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="name">Descripción de la materia</label>
                            </div>
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <div class="form-floating">
        
                                <select name="idCarrera" class="form-control form-select form-select-lg" required>
                                    <option value="" disabled selected>Seleccione una...  </option> 
                                <?php
                                    foreach($infocarreras->result() as $row)
                                    {
                                    ?>
                                    <option value="<?php echo $row->idCarrera;?>"><?php echo $row->nombreCarrera;?></option>
                                    <?php
                                    }
                                    ?>
                                </select>


 
                            </div>
                        
                          
                        </div>
                       
                      
            
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">CREAR CARRERA</button>
                        </div>
                    </div>
                  
                    <?php form_close() ;?>
            </div>
        </div>
    </div>
 

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