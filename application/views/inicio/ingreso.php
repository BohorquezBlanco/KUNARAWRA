  <main class="form-signin">
  <form>
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div> <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" >Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018–2021</p>
  </form>
</main>
<a href="<?php echo base_url();?>index.php/usuarios/incioEstudiante">Cuando Se loguea el alumno</a> <br>
<a href="<?php echo base_url();?>index.php/usuarios/inicioProfesor">Cuando Se loguea el profesor</a> <br>
<a href="<?php echo base_url();?>index.php/usuarios/inicioAdministrador">Cuando Se loguea el administrador</a>
    

