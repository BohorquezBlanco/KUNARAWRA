

 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Perfil</h6>
                <h1 class="mb-2">Puedes editar sus datos :D</h1>
            </div>
   
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-1 mx-auto mb-4" src="<?php echo base_url(); ?>img/testimonial-1.jpg" style="width: 150px; height: 150px;">
                     <p>juanita@gmail.com</p>
                    <a href="">
                         <h5 class="mb-0">Editar Foto</h5><br>
                    </a>
                  
                </div>
                <h5 class="mb-2">Materias Cursadas:</h5> <h5>8</h5> <br> <br>
                <?php
            foreach ($infoestudiante->result() as $row)
            {
               echo form_open_multipart('usuarios/modificarbd');  //apertura de formulario llegando al metodo agregarbase de datos
               ?>
            <input type="hidden" name="idusuario"  value="<?php echo $row->idUsuario; ?>">
               <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="nombre" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row->nombre; ?>">
                            <label for="name">Tu nombre es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="primerapellido" class="form-control"  placeholder="Your Email" value="<?php echo $row->primerApellido; ?>">
                            <label for="email">Tu primer apellido es:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text"  name="segundoapellido" class="form-control"  placeholder="Your Email" value="<?php echo $row->segundoApellido; ?>" >
                            <label for="email">Tu segundo apellido es:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text"  name="password" class="form-control"  placeholder="Your Email" value="<?php echo $row->password; ?>" >
                            <label for="email">Tu contraseña es:</label>
                        </div>
                    </div>
                    
                   
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">EDITAR PERFIL</button>
                    </div>

                   
                </div>
                <?php 
                 form_close(); 
                 }
                 ?> 

                
        </div>
    </div>
    <!-- Testimonial End -->
        
    



    


