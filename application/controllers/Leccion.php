<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leccion extends CI_Controller {

	//------SELECT------- 
	public function index()
	{
		//CAPTURO EL ID DE CARRERA
		$idMateria=$_POST['idMateria'];
		$nombreMateria=$_POST['nombreMateria'];

		$lista=$this->leccion_model->listaLeccion($idMateria);//se almacena la consulta 
		$data['leccion']=$lista;//desarrollando un array relacional 

		$this->session->set_userdata('idMateria',$idMateria);// variables de sesion de idCarrera
		$this->session->set_userdata('nombreMateria',$nombreMateria);// variables de sesion de nombre carrera 

	
		//en aqui se acumula informacion 
		$data['infomaterias']=$this->materia_model->listamaterias($idMateria);

		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarL');	
		$this->load->view('Lecciones/lecciones',$data);	
	}

	public function crearLeccion()
{
	$data['infomaterias']=$this->materia_model->listaMaterias2();
	
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarL');	
	$this->load->view('Lecciones/agregarLeccion',$data);//envio resultado de consulta 
	
}

	public function formleccion()
	{		
		$idMateria=$_POST['idmateria'];
		$data['infomaterias']=$this->materia_model->listamaterias($idMateria);

		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarL');	
		$this->load->view('Lecciones/agregarLeccion',$data);	
	}


	//------INSERT------- 

	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
	$data['nombreLeccion']=strtoupper($_POST['nombreleccion']);
	$data['descripcion']=strtoupper($_POST['descripcionleccion']);
	$data['urlVideo']=$_POST['urlVideo'];
	$data['idMateria']=$_POST['idmateria'];
	$lista=$this->leccion_model->agregarleccion($data);//se almacena la consulta 
		
	$idMateria=$_POST['idmateria'];
		$lista2=$this->leccion_model->listaLeccion($idMateria);//se almacena la consulta 
		$data2['leccion']=$lista2;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		
		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarL');	
		$this->load->view('Lecciones/lecciones',$data2);	
	}
	//UPDATE
	public function modificar()
{
	$idleccion=$_POST['idleccion'];
	$data['infoleccion']=$this -> leccion_model ->recuperarleccion($idleccion);//en inforestudiante se almacena todo el resultado de la consulta
	
	$this->load->view('inc/cabeza/cabeza1');	
	$this->load->view('inc/spinner/spinner');	
	$this->load->view('inc/navbar/navbarL');	
	$this->load->view('Lecciones/edicionLeccion',$data);//envio resultado de consulta 

}

public function modificarbd()
{
	$idleccion=$_POST['idleccion'];
	$data['nombreLeccion']=strtoupper($_POST['nombreleccion']);
	$data['descripcion']=strtoupper($_POST['descripcion']);
	$data['urlVideo']=$_POST['urlVideo'];
	$this -> leccion_model ->modificarleccion($idleccion,$data);
	$data['idMateria']=$_POST['idmateria'];
	
		//CAPTURO EL ID DE CARRERA
		$idMateria=$_POST['idmateria'];	
		$lista2=$this->leccion_model->listaLeccion($idMateria);//se almacena la consulta 
		$data2['leccion']=$lista2;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		
		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarL');	
		$this->load->view('Lecciones/lecciones',$data2);	

}

	//ELIMINACION LOGICA
public function deshabilitarbd ()
{
	$idleccion=$_POST['idleccion'];
	$data['estado']='0';
	$this -> leccion_model ->modificarleccion($idleccion,$data);//reutilizamos el modelo 
	

	$idMateria=$_POST['idmateria'];
		$lista2=$this->leccion_model->listaLeccion($idMateria);//se almacena la consulta 
		$data2['leccion']=$lista2;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		
		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('inc/spinner/spinner');	
		$this->load->view('inc/navbar/navbarL');
		$this->load->view('Lecciones/lecciones',$data2);

}

	
}



