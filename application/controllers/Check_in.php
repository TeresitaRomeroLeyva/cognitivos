<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_in extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model');

	}

	
	public function index()
	{


		$data['errors'] = $this->session->flashdata('errors');
		$data['success']=$this->session->flashdata('success');

		$this->load->database();
		$this->load->view('register',$data);
		$this->load->library('form_validation');
		$this->load->library ( 'encryption' );

	
    	
	}
	public function save(){

		
			# code...
			//print_r($_POST);
		$username=$this->input->post("username");
		$last_name=$this->input->post("last_name");
 		$password=$this->input->post("password");
 	 	$address1=$this->input->post("address1");
 		$country=$this->input->post("country");
 		$city=$this->input->post("city");
 		$state=$this->input->post("state");
 		$phone=$this->input->post("phone");
 		$email=$this->input->post("email");


 		$this->form_validation->set_rules('username','Nombre(s)','required|min_length[5]');
 		$this->form_validation->set_rules('last_name','Apellidos');
 		$this->form_validation->set_rules('password','contraseña','required|matches[confirm_pass]|min_length[8]|max_length[20]');
 		$this->form_validation->set_rules('confirm_pass','Confirmar contraseña', 'required');
 		$this->form_validation->set_rules('address1','Direccion', 'required');
 		$this->form_validation->set_rules('country','pais','required');
 		$this->form_validation->set_rules('city','Ciudad', 'required');
 		$this->form_validation->set_rules('state','Estado', 'required');
 		$this->form_validation->set_rules('phone','Telefono','numeric|min_length[10]|max_length[10]');
 		$this->form_validation->set_rules('email','Correo electronico','valid_email|is_unique[usersusers.email]');

      $this->form_validation->set_message('is_unique', 'El %s ya esta registrado, porfavor inserte uno nuevo.');
      
 
 		if ($this->form_validation->run()=== true) {
 			# code...
 			$datos=array(
 				"username"=>$username,
				
				"password"=>$password,
				
				"email"=>$email,
				"gid"=>5

			);
			$perfil=array(
				"first_name"=>$username,
				"last_name"=>$last_name,
			    "address1"=>$address1,
				"country"=>$country,
				"city"=>$city,
				"state"=>$state, 
				"phone"=>$phone
			);
			if ($this->Users_model->register($datos, $perfil)==true) 
				
				# code...
			$this->session->set_flashdata('success', "Registro existoso, ya puede iniciar sesiòn");
			
			else
				$this->session->set_flashdata('errors', "No se pueden guardar los datos");

				
			}else{
				$this->session->set_flashdata('errors', validation_errors());
			
			}


			redirect('Check_in');
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
	
	