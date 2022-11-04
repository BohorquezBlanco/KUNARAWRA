<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripcion extends CI_Controller {

	
	////////////////------PANEL DE CURSOS A EXPLORAR------//////////////////// 
	public function explorar()
	{

		$lista=$this->inscripcion_model->listacarreras();//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Usuarios/4explorarCursos',$data);	
		$this->load->view('inc/pie/pie1');	
	}
	//------SELECT------- 
	public function materias()
	{
		//CAPTURO EL ID DE CARRERA
		$idcarrera=$_POST['idcarrera'];

		$lista=$this->inscripcion_model->listamaterias($idcarrera);//se almacena la consulta 
		$data['materia']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion 


		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Inscripcion/materiasIns',$data);	
		$this->load->view('inc/pie/pie1');	
	}
	
	public function registrarse()
	{
	
		$data['idUsuario']=$_POST['idUsuario'];
        $data['idMateria']=$_POST['idMateria'];
		$this->inscripcion_model->inscripcionMateria($data);
		
	
		redirect('inscripcion/explorar','refresh');
		
	}
	public function misCursos()
	{
		$idUsuario=$_POST['idUsuario'];
		$lista=$this->inscripcion_model->selectCarreras($idUsuario);//se almacena la consulta 
		$data['carrera']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Usuarios/4misCursos',$data);	
	}

	//aqui el usuario podra ver sus materias inscritas y reforzar
	public function misMaterias()
	{
	
		$lista=$this->inscripcion_model->selectMaterias();//se almacena la consulta 
		$data['materiaI']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;

		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/MateriasInscritas',$data);	
		$this->load->view('inc/pie/pie1');	
	}
//aqui se habre el panel de avance donde se podra ver videos por leccion como tambien los examenes por leccion 
	public function avanceVideos()
	{
		$idMateria=$_POST['idMateria'];
		$nombreMateria=$_POST['nombreMateria'];
		
		$data['infolecciones']=$this->examen_model->selectexalec2($idMateria);

		$data['lecciones']=$this->leccion_model->listaLeccion($idMateria);//se almacena la consulta 
		

		$idUsuario=$_POST['idUsuario'];
		$idMateria=$_POST['idMateria'];
	
		$this->session->set_userdata('idMateria',$idMateria);// variables de sesion

		$this->session->set_userdata('nombreMateria',$nombreMateria);// variables de sesion

		$this->load->view('Avance/avanceVideos',$data);	
	}



public function examenes_leccion()
{	

	//aqui atrapo el id de la leccion del examen que voy a resolver
	$idLeccion=$_POST['idLeccion'];
	$lista=$this->inscripcion_model->selectExamen($idLeccion);//se almacena la consulta
	$lista=$lista->result();//supuestamente ya deberia tener todos los examenes que pertenecen a dicha leccion

	//aqui are un push 
	$pila = array();

	foreach ($lista as $row)
	{
		$idExamen=$row->idExamen;
		array_push($pila,$idExamen);
	}
	$idAleatorio = array_rand($pila, 1);
	$idExamen= $pila[$idAleatorio] ;

	$lista2=$this->inscripcion_model->selectExamen2($idLeccion,$idExamen);//se almacena la consulta 
	$data['infoExamen']=$lista2;//desarrollando un array relacional 
	$this->load->view('inc/cabeza/cabeza1');
	$this->load->view('inc/navbar/navbar2');	
	$this->load->view('Avance/avanceExamen',$data);
	$this->load->view('inc/pie/pie1');	
}




public function calificacionEx()
{
	$contador=$_POST['contador'];//CANTIDAD DE PREGUNTAS
	$correcta=$_POST['correcta']; //ARRAY DE PREGUNTAS CORRECTAS
	
	$nota=100/$contador;
	$calificacion=0;

    for($i=0;$i<count($correcta);$i++)
    {
	
		$respuesta=$_POST['respuesta'.$i];//array de respuestas
	
	

		if ($respuesta==$correcta[$i]) 
		{
		$calificacion=$calificacion+$nota;
		} else {
		$calificacion=$calificacion+0;
		}	
    }
	if ($calificacion>=51) 
	{
		$aprorepro="APROBADO";
		$data['aprorepro']=$aprorepro;
	}
	else
	{
	   $aprorepro="REPROBADO";
	   $data['aprorepro']=$aprorepro;
	}

	$data['idUsuario']=$_POST['idUsuario'];
	$data['calificacion']=$calificacion;
	$data['idExamen']=$_POST['idExamen'];
	$lista=$this->inscripcion_model->examen($data);

	$data['infoExamen']=$lista;//desarrollando un array relacional 

		$this->load->view('Avance/visualizarNota',$data);
}

	function terminar()
	{
		$idMateria=$_POST['idMateria'];
	

		$data['infolecciones']=$this->examen_model->selectexalec2($idMateria);


		$this->load->view('Avance/avanceVideos',$data);	
	}

	function revisar()
	{
		$idExamen=$_POST['idExamen'];
		$data['infoExamen']=$this->inscripcion_model->selectexarev($idExamen);

		$this->load->view('Avance/revision',$data);	
	}

	function verExamen()
	{
		$idMateria=$_POST['idMateria'];

		$lista=$this->inscripcion_model->selectExGlo($idMateria);//se almacena la consulta 
		$data['infoexamenes']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/visualizarExamen',$data);
		$this->load->view('inc/pie/pie1');	
	}
	function verExamenR()
	{
		$idMateria=$_POST['idMateria'];

		$lista=$this->inscripcion_model->selectExGloR($idMateria);//se almacena la consulta 
		$data['infoexamenes']=$lista;//desarrollando un array relacional 
		//en aqui se acumula informacion ;	
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/visualizarExamen2',$data);
		$this->load->view('inc/pie/pie1');	
	}






	
	//aqui se crea el examen para luego ser resuelto
	function creacionExGs()
	{
		//aqui atrapo el id de la leccion del examen que voy a resolver
		$idLeccion=0;
		$idExamen=$_POST['idExamen'];
		
		$lista2=$this->inscripcion_model->selectExamen2($idLeccion,$idExamen);//se almacena la consulta 
		$data['infoExamen']=$lista2;//desarrollando un array relacional 
		$this->load->view('inc/cabeza/cabeza1');
		$this->load->view('inc/navbar/navbar2');	
		$this->load->view('Avance/avanceExamenG',$data);
		$this->load->view('inc/pie/pie1');	
	}


	public function calificacionExG()
{
	$contador=$_POST['contador'];//CANTIDAD DE PREGUNTAS
	$correcta=$_POST['correcta']; //ARRAY DE PREGUNTAS CORRECTAS
	
	$nota=100/$contador;
	$calificacion=0;

    for($i=0;$i<count($correcta);$i++)
    {
	
		$respuesta=$_POST['respuesta'.$i];//array de respuestas
	
	

		if ($respuesta==$correcta[$i]) 
		{
		$calificacion=$calificacion+$nota;
		} else {
		$calificacion=$calificacion+0;
		}	
    }
	if ($calificacion>=51) 
	{
		$aprorepro="APROBADO";
		$data['aprorepro']=$aprorepro;
	}
	else
	{
	   $aprorepro="REPROBADO";
	   $data['aprorepro']=$aprorepro;
	}

	$data['idUsuario']=$_POST['idUsuario'];
	$data['calificacion']=$calificacion;
	$data['idExamen']=$_POST['idExamen'];
	$lista=$this->inscripcion_model->examen($data);

	$data['infoExamen']=$lista;//desarrollando un array relacional 

		$this->load->view('Avance/visualizarNotaG',$data);
}

//################################################ UPLOAD ##################
function creacionExGsR()
{
	//aqui atrapo el id de la leccion del examen que voy a resolver
	$idLeccion=0;
	$idExamen=$_POST['idExamen'];
	
	$lista2=$this->inscripcion_model->selectExamen22($idLeccion,$idExamen);//se almacena la consulta 
	$data['infoExamen']=$lista2;//desarrollando un array relacional 
	$this->load->view('inc/cabeza/cabeza1');
	$this->load->view('inc/navbar/navbar2');	
	$this->load->view('Avance/avanceExamenGR',$data);
	$this->load->view('inc/pie/pie1');	
}




public function calificacionExGR()
{
	$contador=$_POST['contador'];//CANTIDAD DE PREGUNTAS
	$correcta=$_POST['correcta']; //ARRAY DE PREGUNTAS CORRECTAS
	
	$nota=100/$contador;
	$calificacion=0;

    for($i=0;$i<count($correcta);$i++)
    {
	
		$respuesta=$_POST['respuesta'.$i];//array de respuestas
	
	

		if ($respuesta==$correcta[$i]) 
		{
		$calificacion=$calificacion+$nota;
		} else {
		$calificacion=$calificacion+0;
		}	
    }
	if ($calificacion>=51) 
	{
		$aprorepro="APROBADO";
		$data['aprorepro']=$aprorepro;
	}
	else
	{
	   $aprorepro="REPROBADO";
	   $data['aprorepro']=$aprorepro;
	}


	$idCalificacion=$_POST['idCalificacion'];//muy importante

	$data['idUsuario']=$_POST['idUsuario'];
	$data['calificacion']=$calificacion;
	$data['idExamen']=$_POST['idExamen'];

	$this->inscripcion_model->UPLOAD($data,$idCalificacion);

	$lista=$this->inscripcion_model->examen22($idCalificacion);

	$data['infoExamen']=$lista;//desarrollando un array relacional 
	$this->load->view('Avance/visualizarNotaG',$data);
}

}
