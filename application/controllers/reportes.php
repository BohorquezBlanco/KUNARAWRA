<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once "./vendor/autoload.php";
use Dompdf\Dompdf;

class Reportes extends CI_Controller {

public function listadoCarrerasMateriasLeccion()
{
	$dompdf=new Dompdf();
	$dompdf->loadHTML('<h1>hola mundo</h1>');
	$dompdf->setPaper('A4','portraid');
	$dompdf->render();
	$dompdf->stream();
}
}
