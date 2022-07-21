<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function index()
	{
		$lista=$this->estudiante_model->listaestudiantes();//se almacena la consulta 
		$data['estudiantes']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 

		$this->load->view('inc/header');
		$this->load->view('lista',$data);//envio resultado de consulta 
		$this->load->view('inc/footer');
	}
	//probar la conexion 

}
