<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_in extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model');

	}

	
	public function index()
	{

		
		$this->load->database();
		$this->load->view('register');
		$this->load->library('form_validation');
	
    	
	}
	public function save(){

		if ($this->input->post())
		 {
			# code...
			//print_r($_POST);
		$username=$this->db->escape($_POST["username"]);
 		$password=$this->db->escape($_POST["password"]);
 		$address=$this->db->escape($_POST["address"]);
 		$country=$this->db->escape($_POST["country"]);
 		$city=$this->db->escape($_POST["city"]);
 		$state=$this->db->escape($_POST["state"]);
 		$phone=$this->db->escape($_POST["phone"]);
 		$email=$this->db->escape($_POST["email"]);
 		$last_name=$this->db->escape($_POST["last_name"]);
			
			if($this->Users_model->setRegister($username,$password,$address,$country,$city,$state, $phone,$email, $last_name))
			{
				
				redirect('Log_in');
            
    	
    	}
    	else
    	{
    		redirect('register');
           
            echo "error";
    	}
		}
	}
	


}


	/*public function create(){
		$username=$this->input->post('username');
 		$address=$this->input->post('address');
 		$country=$this->input->post('country');
 		$city=$this->input->post('city');
 		$state=$this->input->post('state');
 		$phone=$this->input->post('phone');
 		$email=$this->input->post('email');
 		$password=$this->input->post('password');
 		$Confirm_Password=$this->input->post('Confirm_Password');
		}*/
	
	