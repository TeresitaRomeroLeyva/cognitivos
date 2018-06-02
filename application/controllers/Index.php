<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


    public function Inicio()
    {
    $data['test'] = "mensaje de prueba";


		$this->load->view('index',$data);
		
    }
}