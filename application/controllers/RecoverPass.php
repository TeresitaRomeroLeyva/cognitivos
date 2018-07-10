<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecoverPass extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model');

	}
public function index(){

		$data['test'] = "mensaje de prueba";
		$data['errors'] = $this->session->flashdata('errors');
		$data['success']=$this->session->flashdata('success');
    	$this->load->database();
		$this->load->view('header2',$data);
		$this->load->view('recoveryPass',$data);
		$this->load->view('footer',$data);
}



}