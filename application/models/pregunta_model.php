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
		$this->db->join('leccion','leccion.idLeccion=pregunta.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1

		$this->db->where('pregunta.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->order_by('idPregunta', 'DESC');
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	//###esto es importante para la busqueda de pregunts en base a la carrera, materia y leccion
	public function listapreguntas2($idLeccion)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('pregunta'); //tabla
		$this->db->join('leccion','leccion.idLeccion=pregunta.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1

		$this->db->where('pregunta.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('pregunta.idLeccion',$idLeccion);//devuelve la lista solo lso que tienen 1 
		$this->db->order_by('idPregunta', 'DESC');
		return $this->db->get(); //devolucion del resultado de la consulta 
	}


	public function listapreguntasM($idPregunta)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('pregunta'); //tabla
		$this->db->join('leccion','leccion.idLeccion=pregunta.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1
		$this->db->join('carrera','carrera.idCarrera=materia.idCarrera');//devuelve la lista solo lso que tienen 1

		$this->db->where('pregunta.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('pregunta.idPregunta',$idPregunta);//devuelve la lista solo lso que tienen 1 

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

	public function modificarPregunta($idPregunta,$data)
	{
		$this->db->where('idPregunta',$idPregunta);
		$this->db-> update('pregunta',$data);//nombre de la tabla
	}

	// ############################# examenes ########################################
	public function listaexamen()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('examen'); //tabla
		$this->db->join('leccion','leccion.idLeccion=examen.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1

		$this->db->where('examen.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->order_by('idExamen', 'DESC');
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	public function listaexamen2($idLeccion)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('examen'); //tabla
		$this->db->join('leccion','leccion.idLeccion=examen.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1

		$this->db->where('examen.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('examen.idLeccion',$idLeccion);//devuelve la lista solo lso que tienen 1 

		$this->db->order_by('idExamen', 'DESC');
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarExamen($idExamen,$data)
	{
		$this->db->where('idExamen',$idExamen);
		$this->db-> update('examen',$data);//nombre de la tabla

		//$this->db->where('idExamen',$idExamen);
		//$this->db->delete('preguntasexamen');//nombre de la tabla
	}
		
	//modificar examen
	public function listaExamen3($idExamen)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('examen'); //tabla
		$this->db->join('leccion','leccion.idLeccion=examen.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1

		$this->db->where('examen.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('examen.idExamen',$idExamen);//devuelve la lista solo lso que tienen 1 


		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function listaPreguntasExamenes($idExamen)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('preguntasexamen'); //tabla
		$this->db->join('pregunta','pregunta.idPregunta=preguntasexamen.idPregunta');//devuelve la lista solo lso que tienen 1

		$this->db->where('pregunta.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('preguntasexamen.idExamen',$idExamen);//devuelve la lista solo lso que tienen 1 


		return $this->db->get(); //devolucion del resultado de la consulta 
	}
		
	public function listaCML($idExamen)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('examen'); //tabla
		$this->db->join('leccion','leccion.idLeccion=examen.idLeccion');//devuelve la lista solo lso que tienen 1
		$this->db->join('materia','materia.idMateria=leccion.idMateria');//devuelve la lista solo lso que tienen 1
		$this->db->join('carrera','carrera.idCarrera=materia.idCarrera');//devuelve la lista solo lso que tienen 1
		
		$this->db->where('examen.estado','1');//devuelve la lista solo lso que tienen 1 
		$this->db->where('examen.idExamen',$idExamen);//devuelve la lista solo lso que tienen 1 

		return $this->db->get(); //devolucion del resultado de la consulta 
	}




}