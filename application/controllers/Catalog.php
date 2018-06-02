<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {


    public function catalog1()
    {
    $data['test'] = "mensaje de prueba";

		$this->load->view('header2',$data);
		$this->load->view('Catalogo',$data);
		$this->load->view('footer',$data);
    }
}
