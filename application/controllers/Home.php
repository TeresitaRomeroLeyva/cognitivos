<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
    $data['test'] = "mensaje de prueba";


		$this->load->view('index',$data);
		
    }
}