<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pregunta extends CI_Controller {

	
	////////////////------PANEL Preguntas------//////////////////// 
	public function index()
	{
	//se va a mostrar la cantidad de preguntas que existen por lecciones//
	$lista=$this->pregunta_model->listapreguntas1();//se almacena la consulta 
		$data['pregunta']=$lista;//desarrollando un array relacional 
		$this->load->view('Preguntas/PreguntasSelect',$data);	
	}
	public function NuevaPregunta()
	{
		$data['infomaterias']=$this->materia_model->listamaterias2(); //almaceno todas las carreras de base de datos
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
            echo '<option value="0">Materias</option>';
            foreach($materias as $fila){
                echo '<option value="'. $fila->idMateria.'">'. $fila->nombreMateria .'</option>';
            }
        }  else {
            echo '<option value="0">Materias</option>';
        }		
	}
	public function selectLec()
	{
		$idMateria= $this->input->post('idMateria');
        
        if($idMateria){
            $this->load->model('pregunta_model');
            $lecciones = $this->pregunta_model->leccionM($idMateria);
            echo '<option value="0">Leccion</option>';
            foreach($lecciones as $fila){
                echo '<option value="'. $fila->idLeccion.'">'. $fila->nombreLeccion .'</option>';
            }
        }  else {
            echo '<option value="0">Leccion</option>';
        }		
	}





	public function Examen()
	{
	$this->load->model('pregunta_model');
	$data['pregunta' ] = $this->pregunta_model->listapreguntas();
		//en aqui se acumula informacion 
	$this->load->view('Preguntas/CreacionExamen',$data);	
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

			$data['idLeccion']=$_POST['idLec'];
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


	/********************EDITAR PREGUNTAS**************************/

	/********************ELIMINAR PREGUNTAS**************************/
	
}
