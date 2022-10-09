<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripcion_model extends CI_Model {

	public function listacarreras()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('carrera'); //tabla//si hay un rigth o un left , 'left rigth' ','carrera.id=materia.carreraid''
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}	

	public function listamaterias($idcarrera)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('materia'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idCarrera',$idcarrera);//devuelve la lista solo lso que tienen 1

		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	//aqui se realiza el insert 
	public function inscripcionMateria($data)
	{
		$this->db->insert('inscritos',$data);  
	}

}