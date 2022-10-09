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

		$lista=$this->inscripcion_model->listacarreras();//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');	
		$this->load->view('Usuarios/4explorarCursos',$data);	
		$this->load->view('inc/pie/pie1');	
	}

}