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

 	public function login ($username, $password){

 		$this->db->where('username', $username);
 		$this->db->where('password',$password);
 		$q=$this->db->get('usuarios');
 	   	
 		if ($q->num_rows()>0) 
 		{
 		
 			return true;
 		}else
 		{
 			return false;
 		}


 	}
 	public function register(){
 		return $this->db->query("SELECT id,username,password,address,country,city,state,phone,email FROM usuarios")->result();
 	}
 	public function setRegister(string $username, string $password,string $address,           						  string $country, string $city, string $state,  string $phone,
 								 string $email, string $last_name)
 	{
 		

 		return $this->db->query("INSERT INTO usuarios(username, password, address, country, city, state, phone, email, last_name)values({$username},{$password},{$address},{$country},{$city},{$state},{$phone},{$email}, {$last_name})");
 	}
 } 