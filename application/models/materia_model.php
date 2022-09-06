<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
//este metodo es invocado por un controlador 
	//aqui se realiza el select 

	public function listamaterias($idcarrera)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('materia'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idCarrera',$idcarrera);//devuelve la lista solo lso que tienen 1

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