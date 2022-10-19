<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripcion extends CI_Controller {

	
	////////////////------PANEL DE CURSOS A EXPLORAR------//////////////////// 
	public function explorar()
	{

		$lista=$this->inscripcion_model->listacarreras();//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');	
		$this->load->view('Usuarios/4explorarCursos',$data);	
		$this->load->view('inc/pie/pie1');	
	}
	//------SELECT------- 
	public function materias()
	{
		//CAPTURO EL ID DE CARRERA
		$idcarrera=$_POST['idcarrera'];

		$lista=$this->inscripcion_model->listamaterias($idcarrera);//se almacena la consulta 
		$data['materia']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		
		$this->load->view('Inscripcion/materiasIns',$data);	
	}
	
	public function registrarse()
	{
		$data['idUsuario']=$_POST['idUsuario'];
        $data['idMateria']=$_POST['idMateria'];
		
		$this->inscripcion_model->inscripcionMateria($data);

		redirect('inscripcion/explorar','refresh');
		
	}
	public function misCursos()
	{
		$idUsuario=$_POST['idUsuario'];
		$lista=$this->inscripcion_model->selectCarreras($idUsuario);//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Usuarios/4misCursos',$data);	
		$this->load->view('inc/pie/pie1');	
	}

	//aqui el usuario podra ver sus materias inscritas y reforzar
	public function misMaterias()
	{
	
		$lista=$this->inscripcion_model->selectMaterias();//se almacena la consulta 
		$data['materiaI']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/MateriasInscritas',$data);	
		$this->load->view('inc/pie/pie1');	
	}

	public function avanceVideos()
	{
		$this->load->view('Avance/avanceVideos');	
	}

public function examenes_leccion()
{
	$lista=$this->inscripcion_model->selectExamen();//se almacena la consulta 
	$data['infoExamen']=$lista;//desarrollando un array relacional 
	$this->load->view('Avance/avanceExamen',$data);	
}

public function calificacionEx()
{
	$contador=$_POST['contador'];//CANTIDAD DE PREGUNTAS
	$correcta=$_POST['correcta']; //ARRAY DE PREGUNTAS CORRECTAS
	
	$nota=100/$contador;
	$calificacion=0;

    for($i=0;$i<count($correcta);$i++)
    {
	
		$respuesta=$_POST['respuesta'.$i];//array de respuestas
	
	

		if ($respuesta==$correcta[$i]) 
		{
		$calificacion=$calificacion+$nota;
		} else {
		$calificacion=$calificacion+0;
		}	
    }
	if ($calificacion>=51) 
	{
		$aprorepro="APROBADO";
		$data['aprorepro']=$aprorepro;
	}
	else
	{
	   $aprorepro="REPROBADO";
	   $data['aprorepro']=$aprorepro;
	}
	

	$data['idExamen']=79;
	$data['idUsuario']=$_POST['idUsuario'];
	$data['calificacion']=$calificacion;
	$this->inscripcion_model->examen($data);


	//aqui mandaria de nuevo atras :D
	$idUsuario=$_POST['idUsuario'];
	

	$lista=$this->inscripcion_model->selectCalEx($idUsuario);//se almacena la consulta 
	$data['infoexamenes']=$lista;//desarrollando un array relacional 
	//en aqui se acumula informacion ;	
	$this->load->view('inc/cabeza/cabeza1');
	$this->load->view('inc/navbar/navbar2');	
	$this->load->view('Avance/visualizarExamen',$data);
	$this->load->view('inc/pie/pie1');	
}

	function verExamen()
	{
		$idUsuario=$_POST['idUsuario'];
	

		$lista=$this->inscripcion_model->selectCalEx($idUsuario);//se almacena la consulta 
		$data['infoexamenes']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/visualizarExamen',$data);
		$this->load->view('inc/pie/pie1');	
	}

}
