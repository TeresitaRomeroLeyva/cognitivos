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
    public function getRandomCode(){
        $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $su = strlen($an) - 1;
        return substr($an, rand(0, $su), 1) .
                substr($an, rand(0, $su), 1) .
                substr($an, rand(0, $su), 1) .
                substr($an, rand(0, $su), 1) .
                substr($an, rand(0, $su), 1) .
                substr($an, rand(0, $su), 1);
   }
    public function changepass_post()
    {
      
          $newpass=$this->getRandomCode();
          $output = $this->Users_model->change_password($newpass);
          if ($output != null) {
          
               $message = [
                                'status' => true,
                                'message' => "new password",
                                'data' =>$newpass
                        ];
                  $this->response($message, REST_Controller::HTTP_OK);
            }else{
            $message = [
                            'status' => FALSE,
                            'message' => "error"
                        ];
                        $this->response($message, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
          }
  }


    public function send_email(){ 

       //cargamos la libreria email de ci
        $this->load->library('email');
                     $newpass=$this->getRandomCode();
 $output = $this->Users_model->change_password($newpass);
            
          //Establecemos esta configuración
     
     
          //Ponemos la dirección de correo que enviará el email y un nombre
            $this->email->from('no-reply@somos.mx', '');
             
          /*
           * Ponemos el o los destinatarios para los que va el email
           */
            $this->email->to($this->input->post("email"));
             
          //Definimos el asunto del mensaje
            $this->email->subject("SOLICITUD DE NUEVA CONTRASEÑA");
             
          //Definimos el mensaje a enviar
               
            $this->email->message(
                    "Email: ".$this->input->post("email"). 
                     ' Mensaje: Haz solicitado una nueva contraseña.
                      Tu nueva contraseña es:'.$newpass
                    );
           
            //Enviamos el email y si se produce bien o mal que avise con una flasdata

            if($this->email->send()){

                $this->session->set_flashdata('envio', 'Se ha enviado una nueva contraseña a tu correo');
            }else{
                       

                $this->session->set_flashdata('envio', 'No se a enviado el email, ingrese un correo valido');
            }
             
            redirect(base_url("forgotPass"));
                                   
    }
}
 

                               



             




