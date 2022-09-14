<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leccion_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
//este metodo es invocado por un controlador 
	//aqui se realiza el select 
	public function listaLeccion($idMateria)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('leccion'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idMateria',$idMateria);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	public function agregarleccion($data)
	{
		$this->db->insert('leccion',$data); 
		 
	}

	//aqui se realiza el update
	public function recuperarleccion($idleccion)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('leccion'); //tabla
		$this->db->where('idLeccion',$idleccion);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarleccion($idleccion,$data)
	{
		$this->db->where('idLeccion',$idleccion);
		$this->db-> update('leccion',$data);//nombre de la tabla
	}

		
	



}