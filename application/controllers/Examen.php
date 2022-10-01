<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen extends CI_Controller {
    public function preguntas()
    {
        
       $pregunta=json_decode($_POST["p"]);
      echo($pregunta) ;

       $data['idUsuario']=1;

        $data['nombreExamen']=$_POST['t'];
        $data['descripcion']=$_POST['d'];
        


        // $this->examen_model->creacionExa($data);
       // $this->examen_model->creacionEx($data,$pregunta);

    }
	
}



