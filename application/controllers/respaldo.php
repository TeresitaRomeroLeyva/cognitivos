
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function Index()
    {   
        $data['test'] = "mensaje de prueba";

        $data['errors'] = $this->session->flashdata('errors');
        $data['success']=$this->session->flashdata('success');

         $q=$this->db->get('usuarios');
        $this->load->view('myProfile',$data);
        $this->load->model('Users_model');
    
    }
    public function updatePassword(){

        $this->form_validation->set_rules('password','contraseña actual','required');
        $this->form_validation->set_rules('new_pass','nueva contraseña','required|min_length[8]|max_length[20]|matches[confirm_pass]');
        $this->form_validation->set_rules('confirm_pass','confirmar contraseña ','required|min_length[8]|max_length[20]');

        if ($this->form_validation->run()) {
            # code...
            $curr_pass=$this->input->post('password');
            $newpass=$this->input->post('new_pass');
            $conf_pass=$this->input->post('new_pass');
            $this->load->model('Users_model');
            $pass=$this->Users_model->getCurrPassword($this->session->userdata('id'));
          
            if ($pass->password==$curr_pass) {
                # code...
                if ($newpass==$conf_pass) {

                    # code...
                    if ($this->Users_model->updatePassword($newpass,$this->session->userdata('id'))) {

                        echo "Contraseña actualizada";
                        # code...
                    }else{
                        echo "fallo para actualizar contraseña";

                    }
                }else{
                    echo "la nueva contraseña y confirmar contraseña no coinciden";

                }
            }else{
                echo "la contraseña actual no coincide";
            } 

        }else{
                $this->session->set_flashdata('errors', validation_errors());
        }
        redirect('Profile');


    }
        
        public function actualizarDatos(){
            $this->load->model('Users_model');

         
            $param=[
                'username'=>$this->input->post("username"),
                'last_name'=>$this->input->post("last_name"),
                'address'=>$this->input->post("address"),
                'country'=>$this->input->post("country"),
                'city'=>$this->input->post("city"),
                'state'=>$this->input->post("state"),
                'phone'=>$this->input->post("phone"),
                'email'=>$this->input->post("email")
            ];
         
            $user=$this->Users_model->actualizarDatoos($this->session->userdata('id'),$param);

            $param['id'] = $this->session->userdata('id');
            $this->session->set_userdata($param);

             
            redirect('Profile');
            
            
}
/* public function send($email,$type, $data){

        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->from($this->config->item('tromero@somos.mx'), $this->config->item('website_name'));
        $this->email->reply_to($this->config->item('tromero@somos.mx'), $this->config->item('website_name'));
        $this->email->to($email);
        $this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name')));
        $this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
        $this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
        $this->email->send();
    
*/
    }
    pruba email
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

}


de aqui empieza metodo send_email
/* public function send_email(){ 

                    //cargamos la libreria email de ci
                $this->load->library('email');
       /*
        * Configuramos los parámetros para enviar el email,
        * las siguientes configuraciones es recomendable
        * hacerlas en el fichero email.php dentro del directorio config,
        * en este caso para hacer un ejemplo rápido lo hacemos 
        * en el propio controlador
        */
        
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.gmail.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'romeroteresita.10@gmail.com';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'estrella05121997';    
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido  
       $config['validate'] = true;
       
        
      //Establecemos esta configuración
        $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('romeroteresita.10@gmail.com', 'Teresita Rl');
         
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('romeroteresita.10@gmail.com', 'Víctor Robles');
         
      //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("SOLICITUD DE NUEVA CONTRASEÑA"));
         
      //Definimos el mensaje a enviar
        $this->email->message(
                "Email: ".$this->input->post("email").
                " Mensaje: ".$this->input->post("mensaje").$newpass
                );
          echo "hola";
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
                   

            $this->session->set_flashdata('envio', 'No se a enviado el email');
        }
         
        redirect(base_url("forgotPass"));
                               
                
         }*