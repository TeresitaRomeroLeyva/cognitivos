<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {


    public function Index()
    {
    $data['test'] = "mensaje de prueba";
    $this->load->database();

		$this->load->view('header2',$data);
		$this->load->view('catalog',$data);
		$this->load->view('footer',$data);
    }
}
