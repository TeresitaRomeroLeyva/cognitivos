<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  * 
  */
 class Users_model extends CI_Model
 {
 

 	public function __construct()
 	{
 		# code...
 		parent:: __construct();

 	}

 	public function login ($email, $password){

 		$this->db->where('email', $email);
 		$this->db->where('password',$password);
 		$q=$this->db->get('usuarios');
 	   	
 		if ($q->num_rows() > 0) 
 		{
 			return $q->row();
 		}
 		
 		return false;
 	}
 	
 	public function guardar($data){

 		$this->db->INSERT("usuarios",$data);
 		if ($this->db->affected_rows()>0) {
 			# code...
 			return true;
 		}
 		else{
 			return false;
 		}
 	}
 	public function Actualizar($id, $data){

 		$this->db->set($datos);

 		$this->db->where('id',$id);

 		if (!$this->db->update('usuarios') 
 			return $this->db->error()['message'];
 			if (!$this->db->affected_rows())
 			return "Not found id:".$id;
			
			return true;
 	}
}

