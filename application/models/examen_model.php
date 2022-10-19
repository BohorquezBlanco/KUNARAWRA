<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examen_model extends CI_Model {	

public function creacionEx($data,$nombre)
{

  $this->db->trans_start();

    $this->db->insert('examen',$data);//crea una nueva muestra
    $idExamen=$this->db->insert_id(); //recuper id de nueva muestra creada

    for($i=0;$i<count($nombre);$i++)
    {
   
      $data3['idExamen']=$idExamen;
      $data3['idPregunta']=$nombre[$i];

      $this->db->insert('preguntasexamen',$data3);
    }
    $this->db-> trans_complete();
    if($this->db->trans_complete()==FALSE)
		{
			return false;
		}

}

public function creacionExa($data)
{

    $this->db->insert('examen',$data);//crea una nueva muestra
   
}

//aqui se hace el select de lecciones por materia 
public function selexalec()
{
  $sql="SELECT distinct L.nombreLeccion
  FROM leccion L
  JOIN materia M  ON M.idMateria=L.idMateria
  JOIN pregunta P  ON P.idLeccion=L.idLeccion
  WHERE M.idMateria = 2";
	return $this->db->query($sql);

}


}