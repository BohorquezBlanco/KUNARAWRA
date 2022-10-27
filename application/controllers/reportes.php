<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once "./vendor/autoload.php";

class Reportes extends CI_Controller {

////////////////------PANEL REPORTES------//////////////////// 
public function index()
	{
		//se va a mostrar la cantidad de preguntas que existen por lecciones//
		$data['CantC']=$this->reportes_model->idCarrera();
		$data['CantM']=$this->reportes_model->idMateria();
		$data['CantL']=$this->reportes_model->idLeccion();
		$data['CantU']=$this->reportes_model->idUsuarios();	
		$data['CantE']=$this->reportes_model->idUsuarios();	
		$data['CantER']=$this->reportes_model->idUsuarios();	

		$this->load->view('Reportes/Generales',$data);	
	}
public function index2()
{
	$data['CantC']=$this->reportes_model->InsGraf();
	

	$this->load->view('Reportes/Carrera',$data);	
}





public function listadoCarrerasMateriasLeccion()
	{
	

			$this->pdf=new Pdf();
			$this->pdf->AddPage();
			$this->pdf->AliasNbPages();
			$this->pdf->SetTitle('CARRERAS_MATERIAS_LECCIONES');
			$this->pdf->SetLeftMargin(15);
			$this->pdf->SetRightMargin(15);
			$this->pdf->SetFillColor(210,210,210);
			$this->pdf->SetFont('Arial','B',11);
			$this->pdf->Cell(30);

			//atrapare los id de examenes y materias en 2 arreglos
			$lista=$this->reportes_model->idCarrera();//se almacena la consulta
			$lista=$lista->result();

			$lista2=$this->reportes_model->idMateria();//se almacena la consulta
			$lista2=$lista2->result();

		//aqui are un push 
		$idCarreraP = array(); //array de idCarrera
		$idMateriaP = array(); //array de idMateria

		foreach ($lista as $row)
		{
			$idCarrera=$row->idCarrera;
			array_push($idCarreraP,$idCarrera);
		}

		foreach ($lista2 as $row)
		{
			$idMateria=$row->idMateria;
			array_push($idMateriaP,$idMateria);
		}
		$this->pdf->Ln(10);
		$this->pdf->SetFont('Arial','B',11);
		$this->pdf->SetFillColor( 43, 197, 212 );
		$num=1;
		$C=0; //CONTADOR DE CARRERAS
		$M=0; //CONTADOR DE MATERIAS
		$L=0; //CONTADOR DE LECCIONES
		//tendra que hacer un recorrido por carrera
		foreach($lista as $row)
		{
		
			
			$this->pdf->SetFont('Arial','B',11);
			$nombreC=$row->nombreCarrera;
			$idCarrera=$row->idCarrera;
			$this->pdf->Cell(30,10,'','TBL',0,'C',1);
			$this->pdf->Cell(150,10,utf8_decode($nombreC),'TBLR',0,'C',1);
			$this->pdf->Ln(10);

			//supuestamente deberia poder crearse esto 
			$lista3=$this->reportes_model->idMateria2($idCarrera);//se almacena la consulta
			$lista3=$lista3->result();
				foreach($lista3 as $row)
				{
					$this->pdf->SetFont('Arial','B',11);
				
				$nombreM=$row->nombreMateria;
				$idMateria=$row->idMateria;
				$this->pdf->Cell(30,6,'MATERIA:','TBLR',0,'C',0);
				$this->pdf->Cell(150,6,utf8_decode($nombreM),'TBLR',0,'C',0);
				$this->pdf->Ln(6);

				$this->pdf->Cell(30,5,utf8_decode('LECCION'),'TBLR',0,'C',0);
				$this->pdf->Cell(150,5,'TITULO','TBLR',0,'C',0);
				$this->pdf->Ln(5);

					$lista4=$this->reportes_model->idLeccion2($idCarrera,$idMateria);//se almacena la consulta
					$lista4=$lista4->result();
					foreach($lista4 as $row)
					{
				
						$nombreL=$row->nombreLeccion;
						$descripcion=$row->descripcion;
						$this->pdf->SetFont('Arial','',9);

						$this->pdf->Cell(30,5,utf8_decode($nombreL),'TBLR',0,'C',0);
						$this->pdf->Cell(150,5, utf8_decode($descripcion),'TBLR',0,'C',0);

						$this->pdf->Ln(5);
						$L++;
					}
					$this->pdf->Cell(0,5,'','TBLR',0,'C',1);
					$this->pdf->Ln(5);
					$M++;
				}
			
					$this->pdf->AddPage();	
					$this->pdf->Ln(5);
					$this->pdf->Ln(5);
					//RESUMEN GENERAL

			$C++;
			$num++;
		}
		$this->pdf->SetFont('Arial','',12);
		$this->pdf->Cell(0,8,'RESUMEN GENERAL','',0,'C',0);
		$this->pdf->Ln(12);

		$this->pdf->Cell(135,7,'MATERIAS, ASIGNATURAS Y LECCIONES TOTALES DEL SISTEMA','TBLR',0,'C',1);
		$this->pdf->SetFont('Arial','',10);
		$this->pdf->Ln(7);
		$this->pdf->Cell(102,5,'ASIGNATURAS O CARRERAS TOTALES:','TBLR',0,'C',0);
		$this->pdf->Cell(33,5, utf8_decode($C),'TBLR',0,'C',0);
		$this->pdf->Ln(5);
		$this->pdf->Cell(102,5,'MATERIAS TOTALES:','TBLR',0,'C',0);
		$this->pdf->Cell(33,5, utf8_decode($M),'TBLR',0,'C',0);
		$this->pdf->Ln(5);
		$this->pdf->Cell(102,5,'LECCIONES TOTALES:','TBLR',0,'C',0);
		$this->pdf->Cell(33,5, utf8_decode($L),'TBLR',0,'C',0);
		$this->pdf->Ln(12);


		//******************************************LO MISMO PERO CON PURO CONTADORES******************************************* */
		$M=0;
		$L=0;
		foreach($lista as $row)
		{
				$nombreC=$row->nombreCarrera;
				$idCarrera=$row->idCarrera;
				$this->pdf->Cell(40,10,'CARRERA:','TBLR',0,'C',1);
				$this->pdf->Cell(140,10,utf8_decode($nombreC),'TBLR',0,'C',1);
				$this->pdf->Ln(10);

				//supuestamente deberia poder crearse esto 
				$lista3=$this->reportes_model->idMateria2($idCarrera);//se almacena la consulta
				$lista3=$lista3->result();
					foreach($lista3 as $row)
					{
						$idMateria=$row->idMateria;
						$lista4=$this->reportes_model->idLeccion2($idCarrera,$idMateria);//se almacena la consulta
						$lista4=$lista4->result();
						foreach($lista4 as $row)
						{
							$L++;
						}
						$M++;
					}
					$this->pdf->Cell(40,10,'MATERIAS TOTALES:','TBLR',0,'C',1);
					$this->pdf->Cell(140,10,utf8_decode($M),'TBLR',0,'C',0);
					$this->pdf->Ln(10);
					$this->pdf->Cell(40,10,'LECCIONES TOTALES:','TBLR',0,'C',1);
					$this->pdf->Cell(140,10,utf8_decode($L),'TBLR',0,'C',0);
					$M=0;
					$L=0;
			
						$this->pdf->Ln(5);
						$this->pdf->Ln(15);
						//RESUMEN GENERAL


				$num++;
			}

			//$idAleatorio = array_rand($idExamen, 1);
			//$idExamen= $idExamen[$idAleatorio] 
			$this->pdf->Output("CARRERASMATERIASLECCIONES.pdf","I");
				
	}



//AVANCE Y BIBLIOGRAFIA DEL ESTUDIANTE POR CARRERA 
public function avance()
{
	//aqui recupero la cantidad de carreras inscritas por el usuario
	$idUsuario=$_POST['idUsuario'];
	$idMateria=$_POST['idMateria'];

	$data['CantCarrera']=$this->reportes_model->cantCarreraIns($idUsuario);

	$data['CantMat']=$this->reportes_model->cantMatIns($idUsuario);

	$data['CantExMat']=$this->reportes_model->cantExMat($idMateria);

	$data['CantExRe']=$this->reportes_model->cantExRe($idMateria,$idUsuario);
	
	//$data['CantEx']=$this->reportes_model->cantCarreraIns($idUsuario);
	//$data['CantAV']=$this->reportes_model->cantCarreraIns($idUsuario);

	//aqui recupero la cantidad de materias inscritas por el usuario

	//aqui recupero la cantidad de examenes resueltos por el usuario

	//aqui recupero el total de lecciones de la materia 

	$this->load->view('HerramientasEstudiante/Estadistica',$data,'refresh');	
}


}
