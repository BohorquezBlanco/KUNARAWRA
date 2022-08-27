<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		
		$this->load->view('inicio/inicio');
	
	}
	public function ingresar()
	{
		$this->load->view('inc/headerIngreso');
		$this->load->view('inc/barrauno');
		$this->load->view('inicio/ingreso');
		$this->load->view('inc/footer');
	}
	public function inscribirse()
	{
		$this->load->view('inc/headerInscribirse');
		$this->load->view('inc/barrauno');
		$this->load->view('inicio/inscripcion');
		$this->load->view('inc/footer');
	}
	//InicioEstudiante
	public function incioEstudiante()
	{
		$this->load->view('inc/headerInscribirse');
		$this->load->view('inc/barrauno');
		$this->load->view('estudiante/inicioEstudiante');
		$this->load->view('inc/footer');
	}
	//InicioProfesor
	public function inicioProfesor()
	{
		$this->load->view('inc/headerInscribirse');
		$this->load->view('inc/barrauno');
		$this->load->view('profesor/inicioProfesor');
		$this->load->view('inc/footer');
	}
	//InicioAdministrador
	public function inicioAdministrador()
	{
		$this->load->view('inc/headerInscribirse');
		$this->load->view('inc/barrauno');
		$this->load->view('administrador/inicioAdmi');
		$this->load->view('inc/footer');
	}
	//probar la conexion 
	public function prueba ()
	{
		$query=$this->db->get('estudiantes');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
}
