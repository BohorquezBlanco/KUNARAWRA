<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
//este metodo es invocado por un controlador 
	//aqui se realiza el select 
	public function listacarreras()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('carrera'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	//aqui se realiza el insert 
	public function agregarcarrera($data)
	{
		$this->db->insert('carrera',$data); 
		 
	}

	//aqui se realiza el update
	public function recuperarcarrera($idcarrera)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('carrera'); //tabla
		$this->db->where('idCarrera',$idcarrera);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarcarrera($idcarrera,$data)
	{
		
		$this->db->where('idCarrera',$idcarrera);
		$this->db-> update('carrera',$data);//nombre de la tabla
	}

		
	



}