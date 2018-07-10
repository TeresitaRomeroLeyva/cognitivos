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
 public function reset_password(){

        if (isset($_POST['email'])&& !empty($_POST['email'])) {
            # code...
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', "Email",'valid_email|xss_clean');
            if ($this->form_validation->run()==FALSE) {
                # code...
                redirect ('ForgotPass', array('error'=>'Inserte un correo valido'));
            }else{
                $email= trim($this->input->post('email'));
                $result=$this->Users_model->email_exists($email);

                if ($result) {
                    # code...
                    $this->send_reset_password_email($email, $result);
                    $this->load->view('Log_in', array('email'=>$email));

                }else
                {
                    $this->load->view('ForgotPass', array('error'=>'El email no esta registrado'));
                }
            }

        }else{
            $this->load->view('ForgotPass');
        }
    }



}