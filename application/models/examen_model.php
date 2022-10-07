<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen_model extends CI_Model {	

public function creacionEx($data,$nombre)
{

    $this->db->insert('examen',$data);//crea una nueva muestra
    $idExamen=$this->db->insert_id(); //recuper id de nueva muestra creada

    for($i=0;$i<count($nombre);$i++)
    {
   
      $data3['idExamen']=$idExamen;
      $data3['idPregunta']=$nombre[$i];

      $this->db->insert('preguntasexamen',$data3);
    }

  

}

public function creacionExa($data)
{

    $this->db->insert('examen',$data);//crea una nueva muestra
   
}
}