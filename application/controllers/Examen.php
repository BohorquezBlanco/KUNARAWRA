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
        $data['idLeccion']=$_POST['idLeccion1'];
        $data['idMateria']=$_POST['idMateria1'];
      
        $data['dificultad']=$_POST['dificultad'];


        $idP=array_values(array_unique($_POST['idP']));//arrays de preguntas

       $this->examen_model->creacionEx($data,$idP);
       // $this->examen_model->creacionEx($data,$pregunta);
       $lista=$this->pregunta_model->listapreguntas1();//se almacena la consulta 
       $data['pregunta']=$lista;//desarrollando un array relacional 
       $this->load->view('Preguntas/PreguntasSelect',$data);	

    }
	
}



