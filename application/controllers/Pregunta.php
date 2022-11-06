<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pregunta extends CI_Controller {

	
	////////////////------PANEL Preguntas------//////////////////// 
	public function index()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
	$lista=$this->pregunta_model->listapreguntas1();//se almacena la consulta 
		$data['pregunta']=$lista;//desarrollando un array relacional 

		$data['infocarreras']=$this->carrera_model->listacarreras();
		$this->load->view('Preguntas/PreguntasSelect',$data);	
	}

	//############################--buscador de preguntas--##########################
	public function index2()
	{
		$idLeccion= $this->input->post('idLeccion');
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
	$lista=$this->pregunta_model->listapreguntas2($idLeccion);//se almacena la consulta 
		$data['pregunta']=$lista;//desarrollando un array relacional 
		
		$data['infocarreras']=$this->carrera_model->listacarreras();
		$this->load->view('Preguntas/PreguntasSelect',$data);	
	}



	public function NuevaPregunta()
	{
		$data['infocarreras']=$this->carrera_model->listacarreras();
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/NuevaPregunta',$data);	
	}


	public function ListadoPregunta()
	{

		$data['infocarreras']=$this->carrera_model->listacarreras(); //almaceno todas las carreras de base de datos

	//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas',$data);	
	}


	public function selectMateria()
	{
		$idCarrera= $this->input->post('idCarrera');
        
        if($idCarrera){
            $this->load->model('pregunta_model');
            $materias = $this->pregunta_model->selectMateriaM($idCarrera);
            echo '<option selected >Materias</option>';
            foreach($materias as $fila){
                echo '<option value="'. $fila->idMateria.'">'. $fila->nombreMateria .'</option>';
            }
        }  else {
            echo '<option selected disabled value="">Materias</option>';
        }		
	}
	public function selectLec()
	{
		$idMateria= $this->input->post('idMateria');
        
        if($idMateria){
            $this->load->model('pregunta_model');
            $lecciones = $this->pregunta_model->leccionM($idMateria);
            echo '<option value="0">EXAMEN GLOBAL</option>';
            foreach($lecciones as $fila){
                echo '<option value="'. $fila->idLeccion.'">'. $fila->nombreLeccion .'</option>';
            }
        }  else {
            echo '<option selected>Leccion</option>';
        }		
	}

	public function selectLec2()
	{
		$idMateria= $this->input->post('idMateria');
        
        if($idMateria){
            $this->load->model('pregunta_model');
            $lecciones = $this->pregunta_model->leccionM($idMateria);
            echo '<option selected disabled value="">Lecciones</option>';
            foreach($lecciones as $fila){
                echo '<option value="'. $fila->idLeccion.'">'. $fila->nombreLeccion .'</option>';
            }
        }  else {
            echo '<option selected disabled value="" >Lecciones</option>';
        }		
	}





	public function Examen()
	{
	$this->load->model('pregunta_model');
	$data['infomaterias']=$this->materia_model->listamaterias2(); 
	$data['pregunta' ] = $this->pregunta_model->listapreguntas();
		//en aqui se acumula informacion 
	$this->load->view('Preguntas/CreacionExamen',$data);	
	}


	public function Atras()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
	$this->load->view('inc/cabeza/cabeza1');
	$this->load->view('inc/navbar/navbarADM');
	$this->load->view('inc/spinner/spinner');
	$this->load->view('Usuarios/5areaAdm');
	$this->load->view('inc/pie/pie1');
	}

	/********************INSERTAR PREGUNTA**************************/
	public function crearPregunta()
		{
			//nombre de la columna de la base dedatos y el otro como esta en formulario
			$data['pregunta']=$_POST['pregunta'];
			$data['A']=$_POST['A'];
			$data['B']=$_POST['B'];
			$data['C']=$_POST['C'];
			$data['D']=$_POST['D'];
			$data['correcta']=$_POST['correcta'];

			$data['idLeccion']=$_POST['idLeccion'];
			$lista=$this->pregunta_model->agregarpreguntas($data);//se almacena la consulta 
			redirect('pregunta/NuevaPregunta','refresh');
		}
public function buscar() 
	{
		$data['infocarreras']=$this->carrera_model->listacarreras(); //almaceno todas las carreras de base de datos
		//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas',$data);		 
	}

	/********************VER PREGUNTAS**************************/
	public function selectdeshabilitados() 
	{
		$data['infocarreras']=$this->carrera_model->listacarreras(); //almaceno todas las carreras de base de datos
		//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas',$data);		 
	}



	/********************ELIMINAR PREGUNTAS**************************/
	public function eliminar() 
	{
		$data['infocarreras']=$this->carrera_model->listacarreras(); //almaceno todas las carreras de base de datos
		//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas',$data);		 
	}
	public function deshabilitar() 
	{
		$data['infocarreras']=$this->carrera_model->listacarreras(); //almaceno todas las carreras de base de datos
		//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$this->load->view('Preguntas/ListadoPreguntas',$data);		 
	}


	
	/********************EDITAR PREGUNTAS**************************/
	public function modificar() 
	{
		$idPregunta= $this->input->post('idPregunta');
		
		$lista=$this->pregunta_model->listapreguntasM($idPregunta);//se almacena la consulta 
		$data['pregunta']=$lista;//desarrollando un array relacional 


		$data['infocarreras']=$this->carrera_model->listacarreras();

		$this->load->view('Preguntas/PreguntasModificar',$data);		 
	}

	public function modificarbd() 
	{
		$idPregunta=$_POST['idPregunta'];

		$data['idLeccion']=$_POST['idLeccion'];
		$data['A']=mb_strtoupper($_POST['A']);
		$data['B']=mb_strtoupper($_POST['B']);
		$data['C']=mb_strtoupper($_POST['C']);
		$data['D']=mb_strtoupper($_POST['D']);
		$data['correcta']=mb_strtoupper($_POST['correcta']);
		$data['pregunta']=mb_strtoupper($_POST['pregunta']);

		$this -> pregunta_model ->modificarPregunta($idPregunta,$data);


		//se va a mostrar la cantidad de preguntas que existen por leccioneW//
		$lista=$this->pregunta_model->listapreguntas1();//se almacena la consulta 
		$data2['pregunta']=$lista;//desarrollando un array relacional 

		$data2['infocarreras']=$this->carrera_model->listacarreras();
		$this->load->view('Preguntas/PreguntasSelect',$data2);	
	}

	//ELIMINACION LOGICA
	public function deshabilitarbd()
	{
		$idPregunta=$_POST['idPregunta'];
		$data['estado']='0';
	
		$this -> pregunta_model ->modificarPregunta($idPregunta,$data);//reutilizamos el modelo 
		redirect('pregunta/index','refresh');
	}
	
}
