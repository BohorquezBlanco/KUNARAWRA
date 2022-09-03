<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	//------SELECT------- 
	public function index()
	{
		$lista=$this->administrador_model->listacarreras();//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		$this->load->view('AreaAdmEdu/carreras',$data);	
	}

public function formcarrera()
{
	$this->load->view('AreaRegistro/agregarCarrera');	
}


	//------INSERT------- 

	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
	$data['nombreCarrera']=$_POST['nombrecarrera'];
	$data['descripcion']=$_POST['descripcioncarrera'];


	$lista=$this->administrador_model->agregarcarrera($data);//se almacena la consulta 
		
	redirect('administrador/index','refresh');
	}
	//UPDATE
	public function modificar()
{
	$idcarrera=$_POST['idcarrera'];
	$data['infocarrera']=$this -> administrador_model ->recuperarcarrera($idcarrera);//en inforestudiante se almacena todo el resultado de la consulta
	$this->load->view('PerfilUsuario/EdicionCarrera',$data);//envio resultado de consulta 

}

public function modificarbd()
{
	$idcarrera=$_POST['idcarrera'];
	$data['nombreCarrera']=$_POST['nombrecarrera'];
	$data['descripcion']=$_POST['descripcion'];


	$this -> administrador_model ->modificarcarrera($idcarrera,$data);
	redirect('administrador/index','refresh');
}

	//ELIMINACION LOGICA
public function deshabilitarbd ()
{
	$idcarrera=$_POST['idcarrera'];
	$data['estado']='0';

	$this -> administrador_model ->modificarcarrera($idcarrera,$data);//reutilizamos el modelo 
	redirect('administrador/index','refresh');
}

	
}
