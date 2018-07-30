
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function Index()
    {   
   		$data['test'] = "mensaje de prueba";

		$data['errors'] = $this->session->flashdata('errors');
		$data['success']=$this->session->flashdata('success');

		 $q=$this->db->get('usersusers');
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
    
            	if ($this->Users_model->updatePassword($newpass,$this->session->userdata('id'))) 
                    {
                
                            $this->session->set_flashdata('success', "Contraseña actualizada");
    				
    				}else
                    {
                            $this->session->set_flashdata('errors', "Fallo para actualizar contraseña");
    				}
            }else{
    			
                  $this->session->set_flashdata('errors', "La contraseña actual no coincide");
    		          } 

    	}else{
    			$this->session->set_flashdata('errors', validation_errors());
    	}
    	redirect('Profile');


    }
    	
    	public function actualizarDatos(){
            
            $this->load->model('Users_model');
            $username=$this->input->post("username");
            $last_name=$this->input->post("last_name");
            $password=$this->input->post("password");
            $address=$this->input->post("address");
            $country=$this->input->post("country");
            $city=$this->input->post("city");
            $state=$this->input->post("state");
            $phone=$this->input->post("phone");
            $email=$this->input->post("email");
          
            $this->form_validation->set_rules('username','Nombre(s)','required|min_length[5]');
            $this->form_validation->set_rules('last_name','Apellidos');
            $this->form_validation->set_rules('address','Direccion');
            $this->form_validation->set_rules('country','pais');
            $this->form_validation->set_rules('city','Ciudad');
            $this->form_validation->set_rules('state','Estado' );
            $this->form_validation->set_rules('phone','Telefono','numeric|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'valid_email');
        
        if ($this->form_validation->run()=== true) {
                # code...
                $datos=array(
                    "username"=>$username,
                    
                    "email"=>$email,
                    "gid"=>5

                );
                $perfil=array(

                    "last_name"=>$last_name,
                    "address"=>$address,
                    "country"=>$country,
                    "city"=>$city,
                    "state"=>$state, 
                    "phone"=>$phone

                );
                  

                $datos['id'] = $this->session->userdata('id');

            if ($this->Users_model->updateData($this->session->userdata('id'),$datos, $perfil)==true) 
                {


                } 
                $this->session->set_flashdata('success', "Se han actualizado los datos");
           
          
            }else{
                $this->session->set_flashdata('errors', validation_errors());
            
            }

   
            redirect('Profile');
            
            
}
}