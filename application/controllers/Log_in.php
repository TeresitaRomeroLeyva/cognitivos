<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_in extends CI_Controller {


    public function login()
    {
    $data['test'] = "mensaje de prueba";
    if (isset($_POST['password'])) {
    	# code...
    	$this->load->model('user_model');
    	if ($this->user_model->login($_POST['username'],$_POST['password'])) 
    	{
    		redirect('Privacity');
    	
    	}
    	else
    	{
    		redirect('Log_in');
    	}
    }
		$this->load->view('login',$data);
		
    }
}