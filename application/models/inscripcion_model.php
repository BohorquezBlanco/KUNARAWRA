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


//aqui se realizara el select de materias a las que el usuario
//esta inscrito
public function selectCarreras($idUsuario)
{
	
	$this->db->distinct();
	$this->db->select('usuario.nombre,carrera.nombreCarrera,carrera.descripcion,carrera.idCarrera');

	$this->db->from('usuario'); //tabla
	
	$this->db->join('inscritos','usuario.idUsuario=inscritos.idUsuario');

	$this->db->join('materia','materia.idMateria=inscritos.idMateria');

	$this->db->join('carrera','carrera.idCarrera=materia.idCarrera');
	$this->db->where('usuario.idUsuario',$idUsuario);//devuelve la lista solo lso que tienen 1
	$this->db->where('carrera.estado',1);//devuelve la lista solo lso que tienen 1 

	return $this->db->get(); //devolucion del resultado de la consulta 
}


public function selectMaterias()
{
	$idUsuario=$_POST['idUsuario'];
	$idCarrera=$_POST['idCarrera'];

	$this->db->select('*');

	$this->db->from('usuario'); //tabla
	
	$this->db->join('inscritos','usuario.idUsuario=inscritos.idUsuario');

	$this->db->join('materia','materia.idMateria=inscritos.idMateria');

	$this->db->join('carrera','carrera.idCarrera=materia.idCarrera');
	$this->db->where('carrera.idCarrera',$idCarrera);//devuelve la lista solo lso que tienen 1
	$this->db->where('usuario.idUsuario',$idUsuario);//devuelve la lista solo lso que tienen 1
	$this->db->where('carrera.estado',1);//devuelve la lista solo lso que tienen 1 

	return $this->db->get(); //devolucion del resultado de la consulta 
}

//INICIO 2 metodos son usados para ver examenes aleatorios por leccion 
	public function selectExamen($idLeccion)
	{
		$sql="SELECT distinct E.nombreExamen,E.idExamen,E.idLeccion 
		FROM examen E
		JOIN preguntasexamen PE ON PE.idExamen=E.idExamen
		JOIN pregunta P ON P.idPregunta=PE.idPregunta
		WHERE E.idLeccion=$idLeccion";
		return $this->db->query($sql);
	}

	public function selectExamen2($idLeccion,$idExamen)
		{
		$sql="SELECT  E.nombreExamen,E.idExamen,E.idLeccion,P.correcta,P.pregunta,P.A,P.B,P.C,P.D
		FROM examen E
		JOIN preguntasexamen PE ON PE.idExamen=E.idExamen
		JOIN pregunta P ON P.idPregunta=PE.idPregunta
		WHERE E.idLeccion=$idLeccion AND E.idExamen=$idExamen";

		return $this->db->query($sql);
		}
//FIN estos 2 metodos son usados para ver examenes aleatorios por leccion 




//aqui se califica el examen
public function examen($data)
{
	$this->db->insert('calificacionexamen',$data);  
}


public function selectExGlo($idMateria)
{
	
	$sql="SELECT distinct E.nombreExamen,E.idExamen,E.idLeccion,E.idMateria,E.nombreExamen,E.descripcion
	FROM examen E
	JOIN preguntasexamen PE ON PE.idExamen=E.idExamen
	JOIN pregunta P ON P.idPregunta=PE.idPregunta
    WHERE E.idLeccion=0 AND E.idMateria=$idMateria";
	return $this->db->query($sql);
}


}