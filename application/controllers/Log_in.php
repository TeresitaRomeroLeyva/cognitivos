<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_in extends CI_Controller {
  
    public function index()
    {

    $this->load->database();
    $q=$this->db->get('usuarios');
    $data['test'] = "mensaje de prueba";
    if (isset($_POST['password'])) {
    	# code...
          $this->load->model('users_model');
    	if ($this->users_model->login($_POST['username'],$_POST['password'])) 
    	{
    		redirect('Privacity');
            
    	
    	}
    	else
    	{
    		redirect('Log_in');
           
            echo "error";
    	}
    }
        
		$this->load->view('login',$data);
		
    }
}