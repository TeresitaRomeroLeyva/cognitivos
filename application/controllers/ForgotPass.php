<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotPass extends CI_Controller {
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
		$this->load->view('forgotPass',$data);
		$this->load->view('footer',$data);
}
 public function send(){

        //if (isset($_POST['email']) && $_POST['email']=='true') {
            $this->load->library('email');
            # code...
            /*$this->load->library('form_validation');
            $this->form_validation->set_rules('email', "Email",'valid_email|xss_clean');
            $this->form_validation->set_rules('password','Password','required|trim|xss_clean|md5');
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es válido');


            if ($this->form_validation->run()==FALSE) {
                # code...
                $this->index();
            }else{*/
                $Password="x";//$this->input->post('password');
                $email="tromero@somos.mx";//$this->input->post('email');

                //$insert=$this->Users_model->recovery($password,$email);
                $this->email->from('romeroteresita.10@gmail.com');
                $this->email->to($email);
                $this->email->message('<h2>'.$email.'Haz solicitado una nueva contraseña</h2><hr><br><br> tu password es: '.$Password);
                $this->email->send();
            //}

        //}
    }



}