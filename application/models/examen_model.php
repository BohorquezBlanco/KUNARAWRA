<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen_model extends CI_Model {	

public function creacionEx($data,$pregunta)
{

    $this->db->insert('examen',$data);//crea una nueva muestra
    $idExamen=$this->db->insert_id(); //recuper id de nueva muestra creada

  
    for($i = 1; $i<=$pregunta.count($pregunta); $i++) 
    {
      $data3['idExamen']=$idExamen;
      $data3['idPregunta']=$pregunta[$i];
      $this->db->insert('pregunta',$data3);//crear una nueva pregunta
   
    }

  

}

public function creacionExa($data)
{

    $this->db->insert('examen',$data);//crea una nueva muestra
   
}
}