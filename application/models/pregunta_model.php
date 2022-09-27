<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pregunta_model extends CI_Model {

	public function selectMateriaM($idCarrera)
	{
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idCarrera',$idCarrera);
		$materias = $this->db->get('materia');
		if($materias->num_rows() > 0){
            return $materias->result();
        }
	}

	public function leccionM($idMateria)
	{
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idMateria',$idMateria);
		$lecciones = $this->db->get('leccion');
		if($lecciones->num_rows() > 0){
            return $lecciones->result();
        }
	}

	public function listapreguntas()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('leccion'); //tabla
		$this->db->join('pregunta','leccion.idLeccion=pregunta.idLeccion');//devuelve la lista solo lso que tienen 1
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	public function listapreguntas1()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('pregunta'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 

		return $this->db->get(); //devolucion del resultado de la consulta 
	}




	public function listaLeccion($idMateria)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('leccion'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('idMateria',$idMateria);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	public function agregarpreguntas($data)
	{
		
		$this->db->insert('pregunta',$data); 
		 
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