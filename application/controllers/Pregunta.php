<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pregunta extends CI_Controller {

	
	////////////////------PANEL Preguntas------//////////////////// 
	public function index()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/PreguntasSelect');	
	}
	public function NuevaPregunta()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/NuevaPregunta');	
	}
	public function ListadoPregunta()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas');	
	}
	public function Atras()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
	$this->load->view('inc/cabeza/cabeza1');
	$this->load->view('inc/navbar/navbar1');
	$this->load->view('inc/spinner/spinner');
	$this->load->view('Usuarios/5areaAdm');
	$this->load->view('inc/pie/pie1');
	}
}
