<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	//este metodo es invocado por un controlador 
	//aqui se realiza el select 
	public function listaestudiantes()
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('estado','1');//devuelve la lista solo lso que tienen 1 
		return $this->db->get(); //devolucion del resultado de la consulta 
	}

	//aqui se realiza el insert 
	public function agregarestudiante($data)
	{
		$this->db->insert('usuario',$data); 
		 
	}
	//aqui se realiza el update
	public function recuperarestudiante($idusuario)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('idUsuario',$idusuario);
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	public function modificarestudiante($idusuario,$data)
	{
		$this->db->where('idUsuario',$idusuario);
		$this->db-> update('usuario',$data);//nombre de la tabla
	}

	//validar contraseña
	
	//este metodo es invocado por un controlador 
	public function validar($login,$password)
	{
		$this->db->select('*'); //select * from 
		$this->db->from('usuario'); //tabla
		$this->db->where('correo',$login);//donde login sea igual a login y 
		$this->db->where('password',$password);//password sea igual a password
		return $this->db->get(); //devolucion del resultado de la consulta 
	}
	
	//para destruir cesiones
	public function logout()
	{
		$this->session->sess_destroy();
		//redirect('usuarios/index','refresh');	
		redirect('usuarios/index/1','refresh');//se agrega un codigo /1	
	}


}