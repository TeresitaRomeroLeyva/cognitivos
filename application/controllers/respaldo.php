
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
}