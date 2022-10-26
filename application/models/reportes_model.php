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
	
//*********############################ DATOS GENERALES PARA USUARIO :D ############################***********/
	public function cantCarreraIns($idUsuario)
	{
		$sql="SELECT distinct C.idCarrera,C.nombreCarrera,I.idUsuario
		FROM carrera C
		JOIN materia M  ON M.idCarrera=C.idCarrera
		JOIN inscritos I ON I.idMateria=M.idMateria
		WHERE I.idUsuario=2
	";
		return $this->db->query($sql);
	}
	public function cantMatIns($idUsuario)
	{
		$sql="SELECT M.nombreMateria,M.idMateria,I.idUsuario
		FROM materia M
		JOIN inscritos I ON I.idMateria=M.idMateria
		WHERE I.idUsuario=$idUsuario";
		return $this->db->query($sql);
	}



	
	public function cantExMat($idMateria)
	{
		$sql="SELECT E.idExamen
		FROM examen E
		WHERE E.idMateria=$idMateria;";
		return $this->db->query($sql);
	}

	public function cantExRe($idMateria,$idUsuario)
	{
		$sql=" SELECT  CE.idUsuario, EC.idLeccion, EC.idMateria,CE.aprorepro
		FROM calificacionexamen CE 
		JOIN examen EC ON EC.idExamen = CE.idExamen
		WHERE CE.aprorepro='APROBADO' AND EC.idMateria=$idMateria AND CE.idUsuario=$idUsuario;";
		return $this->db->query($sql);
	}
//*********############################ FIN DATOS GENERALES PARA USUARIO :C###########################********/

	//*********############################ DATOS GENERALES PARA ADMINISTRADOR :D ############################***********/
	
	//*********############################ FIN DATOS GENERALES PARA ADMINISTRADOR :C #########################********/


	//*********############################ PASTEL DE ADMINISTRADOR :D ############################***********/
	//*********############################ FIN DE PASTEL DE ADMINISTRADOR :C#########################********/
}