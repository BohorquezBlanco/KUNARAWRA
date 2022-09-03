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
	public function recuperarestudiante($idusuario)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('idUsuario',$idusuario);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarestudiante($idusuario,$data)
	{
		
		
	
		$this->db->where('idUsuario',$idusuario);
		$this->db-> update('usuario',$data);//nombre de la tabla
	}


}