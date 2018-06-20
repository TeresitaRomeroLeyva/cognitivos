<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {


    public function index()
    {
    $data['test'] = "mensaje de prueba";


		$this->load->view('index2',$data);
		
    }
}