<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reportes_model extends CI_Model {

	//usuarios registrados entre tal fecha a fecha 
	function listaExaMat()
	{
		$sql="SELECT distinct C.nombreCarrera,M.nombreMateria,C.idCarrera
		FROM carrera C
		JOIN materia M ON M.idCarrera=C.idCarrera
		JOIN leccion L ON L.idMateria=M.idMateria";
		  return $this->db->query($sql);
	}

	//para atrapar idDe Carrera
	public function idCarrera()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('carrera'); //tabla//si hay un rigth o un left , 'left rigth' ','carrera.id=materia.carreraid''
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	//para atrapar idMateria
	public function idMateria()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('materia'); //tabla//si hay un rigth o un left , 'left rigth' ','carrera.id=materia.carreraid''
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	//para atrapar nombre de las materias
	public function idMateria2($idCarrera)
	{
		$sql="SELECT distinct C.nombreCarrera,M.nombreMateria,M.idMateria,C.idCarrera
		FROM carrera C
		JOIN materia M ON M.idCarrera=C.idCarrera
		WHERE C.idCarrera=$idCarrera;";
		return $this->db->query($sql);
	}
	public function idLeccion2($idCarrera,$idMateria)
	{
		$sql="SELECT  C.nombreCarrera,M.nombreMateria,M.idMateria,C.idCarrera,L.nombreLeccion,L.descripcion
		FROM carrera C
		JOIN materia M ON M.idCarrera=C.idCarrera
		JOIN leccion L ON L.idMateria=M.idMateria
		WHERE C.idCarrera=$idCarrera AND M.idMateria=$idMateria;";
		return $this->db->query($sql);
	}
	
}