

 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mb-4">
                <h6 class="section-title bg-white text-center text-primary px-3">Perfil</h6>
                <h1 class="mb-2">MODIFICAR DATOS</h1>
            </div>
                <?php
            foreach ($infoestudiante->result() as $row)
            {
               echo form_open_multipart('usuarios/modificarbd');  //apertura de formulario llegando al metodo agregarbase de datos
               ?>
            <input type="hidden" name="idusuario"  value="<?php echo $row->idUsuario; ?>">
               <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="nombre" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row->nombre; ?>" required>
                            <label for="name">Tu nombre es: </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text" name="primerapellido" class="form-control"  placeholder="Your Email" value="<?php echo $row->primerApellido; ?>" required>
                            <label for="email">Tu primer apellido es:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input style="text-transform:uppercase;" type="text"  name="segundoapellido" class="form-control"  placeholder="Your Email" value="<?php echo $row->segundoApellido; ?>"required >
                            <label for="email">Tu segundo apellido es:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="hidden"  name="password" class="form-control"  placeholder="Your Email" value="<?php echo $row->password; ?>" required>
                    
                        </div>
                    </div>
                    
                   
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">MODIFICAR</button>
                    </div>

                   
                </div>
                <?php 
                 form_close(); 
                 }
                 ?> 

                
        </div>
    </div>
    <!-- Testimonial End -->
        
    



    


