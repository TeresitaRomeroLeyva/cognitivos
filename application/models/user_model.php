<?php if (!define('BASEPATH')) exit('No direct script access allowed');

/**
  * 
  */
 class User_model extends CI_Model
 {
 

 	public function __construct()
 	{
 		# code...
 		parent:: __construct();

 	}

 	public function login ($username, $password){

 		$this->db->where('username', $username);
 		$this->db->where('password',$password);
 		$q=$this->db->get('usuarios');

 		if ($q->num_rows()>0) 
 		{
 			# code...
 			return true;
 		}else
 		{
 			return false;
 		}


 	}
 } 






 ?>