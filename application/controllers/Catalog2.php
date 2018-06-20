<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog2 extends CI_Controller {


    public function Index()
    {
    $data['test'] = "mensaje de prueba";
    $this->load->database();

		$this->load->view('header3',$data);
		$this->load->view('catalog2',$data);
		$this->load->view('footer',$data);
    }
}
