<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	//este metodo es invocado por un controlador 
	public function listaestudiantes()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('estudiantes'); //tabla
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	
}