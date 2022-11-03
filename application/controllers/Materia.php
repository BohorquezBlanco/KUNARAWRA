<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Controller {

	//------SELECT------- 
	public function index()
	{
		//CAPTURO EL ID DE CARRERA
		$idcarrera=$_POST['idcarrera'];
		$nombreCarrera=$_POST['nombreCarrera'];

		$this->session->set_userdata('idCarrera',$idcarrera);// variables de sesion de idCarrera
		$this->session->set_userdata('nombreCarrera',$nombreCarrera);// variables de sesion de nombre carrera 

		$lista=$this->materia_model->listamaterias($idcarrera);//se almacena la consulta 
		$data['materia']=$lista; //desarrollando un array relacional 
		//en aqui se acumula informacion 
		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarM');	
		$this->load->view('Materias/materias',$data);	
	}

	

	public function formmateria()
	{
		
		$data['infocarreras']=$this->carrera_model->listacarreras();

		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarM');	
		$this->load->view('Materias/agregarMaterias',$data);	

	}


	//------INSERT------- 

	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulariostrtoupper(
	$data['nombreMateria']=strtoupper($_POST['nombremateria']);
	$data['descripcion']=strtoupper($_POST['descripcionmateria']);
	$data['idCarrera']=$_POST['idCarrera'];
	$lista=$this->materia_model->agregarmateria($data);//se almacena la consulta 
		
	$idcarrera=$_POST['idCarrera'];	
	$lista2=$this->materia_model->listamaterias($idcarrera);//se almacena la consulta 
	$data2['materia']=$lista2;//desarrollando un array relacional 
	//en aqui se acumula informacion 
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarM');	
	$this->load->view('Materias/materias',$data2);

	
	}
	//UPDATE
	public function modificar()
{
	$idmateria=$_POST['idmateria'];
	$data['infomateria']=$this -> materia_model ->recuperarmateria($idmateria);//en inforestudiante se almacena todo el resultado de la consulta
	
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarM');	
	$this->load->view('Materias/edicionMateria',$data);//envio resultado de consulta 

}

public function modificarbd()
{
	$idmateria=$_POST['idmateria'];
	$data['nombreMateria']=strtoupper($_POST['nombremateria']);
	$data['descripcion']=strtoupper($_POST['descripcion']);
$this -> materia_model ->modificarmateria($idmateria,$data);

	$idcarrera=$_POST['idCarrera'];	
	$lista2=$this->materia_model->listamaterias($idcarrera);//se almacena la consulta 
	$data2['materia']=$lista2;//desarrollando un array relacional 
	//en aqui se acumula informacion 
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarM');	
	$this->load->view('Materias/materias',$data2);
}

	//ELIMINACION LOGICA
public function deshabilitarbd ()
{
	$idmateria=$_POST['idmateria'];
	$data['estado']='0';

	$this -> materia_model ->modificarmateria($idmateria,$data);//reutilizamos el modelo 
	
	$idcarrera=$_POST['idCarrera'];	
	$lista2=$this->materia_model->listamaterias($idcarrera);//se almacena la consulta 
	$data2['materia']=$lista2;//desarrollando un array relacional 
	//en aqui se acumula informacion 
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarM');	
	$this->load->view('Materias/materias',$data2);
}

	
}



