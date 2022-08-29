<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	//------INICIO------- 
	public function index()
	{

		$this->load->view('inicio/inicio');	

	}

	//------INGRESAR------- 
	public function ingresar()
	{
		$this->load->view('AreaRegistro/ingresar');
	}

	//------CREACION DE CUENTA------- 
	public function inscribirse()
	{
		
		$this->load->view('AreaRegistro/registrarse');
	
	}
		//INSERT metodo para agregar a base de datos 
	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
	$data['nombre']=$_POST['Nombre'];
	$data['primerApellido']=$_POST['PrimerApellido'];
	$data['segundoApellido']=$_POST['SegundoApellido'];
	$data['correo']=$_POST['Correo'];
	$data['password']=$_POST['Password'];

	$lista=$this->estudiante_model->agregarestudiante($data);//se almacena la consulta 
		
	redirect('usuarios/InicioUsuario','refresh');
	}

	//UPDATE
	public function modificar()
{
	$idusuario=$_POST['idusuario'];
	$data['infoestudiante']=$this -> estudiante_model ->recuperarestudiante($idusuario);//en inforestudiante se almacena todo el resultado de la consulta
	$this->load->view('PerfilUsuario/EdicionPerfilAdm',$data);//envio resultado de consulta 

}
public function modificarbd()
{
	$idusuario=$_POST['idusuario'];
	$data['nombre']=$_POST['nombre'];
	$data['primerApellido']=$_POST['primerapellido'];
	$data['segundoApellido']=$_POST['segundoapellido'];
	$data['password']=$_POST['password'];

	$this -> estudiante_model ->modificarestudiante($idusuario,$data);
	redirect('usuarios/UsuariosNo','refresh');
}

	//------AREA ADMINISTRACION------- 
	public function AreaAdm()
	{
		
		$this->load->view('AreaAdmEdu/areaAdm');
	
	}

	public function UsuariosPanel()
	{
		
		$this->load->view('AreaAdmEdu/UsuariosPan');
	
	}
	public function UsuariosNo()
	{
		$lista=$this->estudiante_model->listaestudiantes();//se almacena la consulta 
		$data['usuario']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		$this->load->view('AreaAdmEdu/UsuariosNoIns',$data);//Envia el resultado de la consulta
	
	}


	public function InicioUsuario()
	{
		
		$this->load->view('AreaCursos/AreaUsuario');
	
	}

	public function PerfilUsuario()
	{
		
		$this->load->view('PerfilUsuario/EdicionPerfil');
	
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
