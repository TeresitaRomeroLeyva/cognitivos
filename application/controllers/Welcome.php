<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function message(){
		$data['test'] = "mensaje de prueba";

		$this->load->view('header2',$data);
		$this->load->view('Catalogo',$data);
		$this->load->view('footer',$data);

	}
	public function  index2(){
		$data['test'] = "mensaje de prueba";

		
		$this->load->view('index',$data);
	
		
	}
	public function  iniciarSesion(){
		$data['test'] = "mensaje de prueba";

		
		$this->load->view('iniciarsesion',$data);
	
		
	}
	

}
