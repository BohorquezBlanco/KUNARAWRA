<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen extends CI_Controller {
    public function preguntas()
    {
        
      // $pregunta=json_decode($_POST["p"]);
      //$pregunta=json_decode($tempstore->get('simulation_ids'));
      //echo($pregunta) ;

        $data['idUsuario']=$_POST['idUsuario'];
        $data['nombreExamen']=$_POST['tituloEx'];
        $data['descripcion']=$_POST['DescripEx'];

        $idP=$_POST['idP'];


       $this->examen_model->creacionEx($data,$idP);
       // $this->examen_model->creacionEx($data,$pregunta);

    }
	
}



