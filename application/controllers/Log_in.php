<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_in extends CI_Controller {
  
    public function index()
    {
        $data['errors'] = $this->session->flashdata('errors');
        $data['success']=$this->session->flashdata('success');
       
        $this->load->view('login',$data);
        $this->load->library('form_validation');
         $this->load->model('Users_model');

        $data['test'] = "mensaje de prueba";
       
        if ($this->input->post('password',TRUE)) {
        	# code...
             
        	if ($q = $this->Users_model->login($_POST['email'],$_POST['password'])) 
        	{
        		
               
                $this->session->set_userdata($data);
                redirect('Home2');
        	
        	}
        	else
        	{
                $this->session->set_flashdata('errors',"Email o contraseña incorrecto");
            
               
        	}

                redirect('Log_in');
	

        }
    } 
}