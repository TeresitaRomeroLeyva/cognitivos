<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_in extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	
	public function register()
	{
		

		$this->load->database();
		$this->load->view('register');
		$this->load->library('form_validation');
		
		
	}
		}
	