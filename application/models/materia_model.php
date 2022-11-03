<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
//este metodo es invocado por un controlador 
	//aqui se realiza el select



	public function listamaterias($idcarrera)
	{
		$this->db->select('materia.idMateria,materia.nombreMateria,materia.descripcion,materia.fechaRegistro,materia.fechaActualizacion,materia.estado,materia.idCarrera,carrera.nombreCarrera'); //select * from 
		$this->db->from('materia'); //tabla
		$this->db->join('carrera','carrera.idCarrera=materia.idCarrera');//devuelve la lista solo lso que tienen 1

		$this->db->where('materia.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('materia.idCarrera',$idcarrera);//devuelve la lista solo lso que tienen 1

		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	public function listamaterias2()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('materia'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 

		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	

//aqui se realiza el insert 
public function agregarmateria($data)
{
	$this->db->insert('materia',$data); 
	 
}


//aqui se realiza el update
public function recuperarmateria($idmateria)
{
	$this->db->select('*'); //select * from 
	$this->db->from('materia'); //tabla
	$this->db->where('idMateria',$idmateria);
	return $this->db->get(); //devolucion del resultado de la consulta 
}




public function modificarmateria($idmateria,$data)
{
	
	$this->db->where('idMateria',$idmateria);
	$this->db-> update('materia',$data);//nombre de la tabla
}

	


}