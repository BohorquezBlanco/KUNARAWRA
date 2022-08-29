<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
	public function listaestudiantes()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	//aqui se realiza el insert 
	public function agregarestudiante($data)
	{
		$this->db->insert('usuario',$data); 
		 
	}
	//aqui se realiza el update
	public function recuperarestudiante($IdUsuario)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('idUsuario',$IdUsuario);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarestudiante($IdUsuario,$data)
	{
		
		$this->db->where('idUsuario',$IdUsuario);
		$this->db-> update('usuario',$data);//nombre de la tabla
	}
	//aqui se realiza el softdelete
	public function listaestudiantesdeshabilitados()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('estado','0');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
}