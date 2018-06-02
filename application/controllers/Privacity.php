<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacity extends CI_Controller {


    public function privacity1()
    {
    $data['test'] = "mensaje de prueba";

		
		$this->load->view('privacity',$data);
		
    }
}