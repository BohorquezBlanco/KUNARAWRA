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

//aqui se hace hace select de leccion por materia 
public function selectexalec($idMateria)
{
  $sql="SELECT distinct L.nombreLeccion,L.descripcion,L.idLeccion
  FROM leccion L
  JOIN materia M  ON M.idMateria=L.idMateria
  JOIN pregunta P  ON P.idLeccion=L.idLeccion
  WHERE M.idMateria = $idMateria";
	return $this->db->query($sql);

}

public function selectexalec2($idMateria)
{
  $sql="SELECT distinct E.idLeccion,L.nombreLeccion,L.descripcion,M.idMateria,L.urlVideo
  FROM examen E
  JOIN leccion L  ON L.idLeccion=E.idLeccion
  JOIN materia M  ON M.idMateria=L.idMateria
  WHERE M.idMateria=$idMateria AND E.estado=1 ;";
	return $this->db->query($sql);

}


}