<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('inc/barrauno');
		$this->load->view('inicio');
		$this->load->view('inc/pie');
		$this->load->view('inc/footer');
	}
	public function ingresar()
	{
		$this->load->view('inc/headerIngreso');
		$this->load->view('inc/barrauno');
		$this->load->view('ingreso');
		$this->load->view('inc/footer');
	}
	public function inscribirse()
	{
		$this->load->view('inc/headerInscribirse');
		$this->load->view('inc/barrauno');
		$this->load->view('inscripcion');
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
