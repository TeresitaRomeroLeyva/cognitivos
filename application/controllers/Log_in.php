<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_in extends CI_Controller {


    public function login()
    {
    $data['test'] = "mensaje de prueba";

		
		$this->load->view('iniciarsesion',$data);
		
    }
}