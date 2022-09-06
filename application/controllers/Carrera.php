<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrera extends CI_Controller {

	//------SELECT------- 
	public function index()
	{
		$lista=$this->carrera_model->listacarreras();//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		$this->load->view('Carreras/carreras',$data);	
	}

public function formcarrera()
{
	$this->load->view('Carreras/agregarCarrera');	
}


	//------INSERT------- 

	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
	$data['nombreCarrera']=$_POST['nombrecarrera'];
	$data['descripcion']=$_POST['descripcioncarrera'];


	$lista=$this->carrera_model->agregarcarrera($data);//se almacena la consulta 
		
	redirect('carrera/index','refresh');
	}
	//UPDATE
	public function modificar()
{
	$idcarrera=$_POST['idcarrera'];
	$data['infocarrera']=$this -> carrera_model ->recuperarcarrera($idcarrera);//en inforestudiante se almacena todo el resultado de la consulta
	$this->load->view('Carreras/EdicionCarrera',$data);//envio resultado de consulta 

}

public function modificarbd()
{
	$idcarrera=$_POST['idcarrera'];
	$data['nombreCarrera']=$_POST['nombrecarrera'];
	$data['descripcion']=$_POST['descripcion'];


	$this -> carrera_model ->modificarcarrera($idcarrera,$data);
	redirect('carrera/index','refresh');
}
 
	//ELIMINACION LOGICA
public function deshabilitarbd ()
{
	$idcarrera=$_POST['idcarrera'];
	$data['estado']='0';

	$this -> carrera_model ->modificarcarrera($idcarrera,$data);//reutilizamos el modelo 
	redirect('carrera/index','refresh');
}

	
}
