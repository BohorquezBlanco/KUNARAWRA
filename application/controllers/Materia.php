<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Controller {

	//------SELECT------- 
	public function index()
	{
		//CAPTURO EL ID DE CARRERA
		$idcarrera=$_POST['idcarrera'];
		

		$lista=$this->materia_model->listamaterias($idcarrera);//se almacena la consulta 
		$data['materia']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		
		$this->load->view('Materias/materias',$data);	
	}

	

	public function formmateria()
	{
		
		$data['infocarreras']=$this->carrera_model->listacarreras();
		$this->load->view('Materias/agregarMaterias',$data);	
	}


	//------INSERT------- 

	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
	$data['nombreMateria']=$_POST['nombremateria'];
	$data['descripcion']=$_POST['descripcionmateria'];
	$data['idCarrera']=$_POST['idCarrera'];
	$lista=$this->materia_model->agregarmateria($data);//se almacena la consulta 
		

	redirect('administrador/index','refresh');
	
	}
	//UPDATE
	public function modificar()
{
	$idmateria=$_POST['idmateria'];
	$data['infomateria']=$this -> materia_model ->recuperarmateria($idmateria);//en inforestudiante se almacena todo el resultado de la consulta
	$this->load->view('Materias/edicionMateria',$data);//envio resultado de consulta 

}

public function modificarbd()
{
	$idmateria=$_POST['idmateria'];
	$data['nombreMateria']=$_POST['nombremateria'];
	$data['descripcion']=$_POST['descripcion'];


	$this -> materia_model ->modificarmateria($idmateria,$data);
	redirect('materia/index');
}

	//ELIMINACION LOGICA
public function deshabilitarbd ()
{
	$idmateria=$_POST['idmateria'];
	$data['estado']='0';

	$this -> materia_model ->modificarmateria($idmateria,$data);//reutilizamos el modelo 
	redirect('materia/index','refresh');
}

	
}



