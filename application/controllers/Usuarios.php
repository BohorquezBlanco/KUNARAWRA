<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
	////////////////------PANEL USUARIO------//////////////////// 
	public function index()
	{
		$this->load->view('inc/cabeza/cabeza1');	
		$this->load->view('Usuarios/1inicioDePagina');	
		$this->load->view('inc/pie/pie1');	
	}

	//------INGRESAR A LA PAGINA------- 
	public function ingresar()
	{
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('Usuarios/2ingresoPagina');
		
	}

	//------REGRISTRARSE A LA PAGINA------- 
	public function inscribirse()
	{
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('Usuarios/3registrarsePagina');
		$this->load->view('inc/pie/pie1');	
	
	}
	//------INICIO DE USUARIO REGISTRADO A LA PAGINA------- 
	public function InicioUsuario()
	{
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('Usuarios/4inicioUsuario');
		$this->load->view('inc/pie/pie1');	
	}



	/////////////------PANEL ADMINISTRADOR------//////////////////// 
	public function AreaAdm()
	{
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('Usuarios/5areaAdm');
		$this->load->view('inc/pie/pie1');	
	}
	//------Administrador/ usuarios Inicio------- 
	public function UsuariosPanel()
	{
		
		$this->load->view('AreaAdmEdu/UsuariosPan');
	
	}
	

	/////////////***********------CRUD------**********//////////////////// 
//----- SELECT "De los usuarios con cuenta pero sin ninguna inscripcion------- 
	public function UsuariosNo()
	{
		$lista=$this->estudiante_model->listaestudiantes();//se almacena la consulta 
		$data['usuario']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('Usuarios/5_1UsuariosNoIns',$data);//Envia el resultado de la consulta
		$this->load->view('inc/pie/pie1');
	}

	//INSERT  "Insertamos usuario nuevo ya sea por el administrador o por el mismo usuario"
	public function agregarbd()
	{
		//nombre de la columna de la base dedatos y el otro como esta en formulario
		$data['nombre']=$_POST['Nombre'];
		$data['primerApellido']=$_POST['PrimerApellido'];
		$data['segundoApellido']=$_POST['SegundoApellido'];
		$data['correo']=$_POST['Correo'];
		$data['password']=md5($_POST['Password']);

		$lista=$this->estudiante_model->agregarestudiante($data);//se almacena la consulta 

		redirect('usuarios/InicioUsuario','refresh');
	}
	
	//UPDATE "Modificamos el usuario"
	public function modificar()
	{
		$idusuario=$_POST['idusuario'];
		$data['infoestudiante']=$this -> estudiante_model ->recuperarestudiante($idusuario);//en inforestudiante se almacena todo el resultado de la consulta
	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar1');
		$this->load->view('inc/spinner/spinner');
		$this->load->view('inc/pie/pie1');	
		$this->load->view('Usuarios/EdicionPerfilAdm',$data);//envio resultado de consulta 
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

	//------SOFT DELETE "Eliminamos el usuario de manera logica"------- 	
	public function deshabilitarbd ()
	{
		$idusuario=$_POST['idusuario'];
		$data['estado']='0';
		$data['fechaActualizacion']=date('Y-m-d h:m:s');

		$this -> estudiante_model ->modificarestudiante($idusuario,$data);//reutilizamos el modelo 
		redirect('usuarios/UsuariosNo','refresh');
	}
//*****************PARA VALIDAR LOGIN*****************/
	public function validar ()
	{
		//para validar
		$login=$_POST['login'];
		$password=md5($_POST['password']);

		$consulta=$this->estudiante_model->validar($login,$password);

		if($consulta->num_rows()>0)
		{
			//si a encontrado una validacion
			//creamos variables de session 
			foreach ($consulta->result() as $row)
			{
				$this->session->set_userdata('idusuario',$row->idUsuario);// variables de sesion
				$this->session->set_userdata('login',$row->correo);// variables de sesion
				$this->session->set_userdata('tipo',$row->tipo);// variables de sesion
				redirect('usuarios/panel','refresh');
			}
		
		}
		else
		{
			//no hay validacion efectiva y redirigimos a login
			redirect('usuarios/ingresar','refresh'); //redireccionamos pero con el codigo 2
		}
	}
//aqui te llevara al panel de login o administrador
	public function panel()
	{
		if($this->session->userdata('login'))//si existe una variable de sesion con el nombre login aqui vamos a asumir que el usuario se a logeado
		{//el usuario esta logeado
			if($this->session->userdata('tipo')=='1')
			{
					redirect('usuarios/InicioUsuario','refresh');	//si es tipo estudiante cargara el panel de estudiante
			}
			else
			{
				redirect('usuarios/AreaAdm','refresh');	//si no es el tipo admi cargara el panel de administrador
			}
	
		}
		else
		{//el usuario no esta logueado
			redirect('usuarios/ingresar','refresh');
		}
	}
	

	






}
