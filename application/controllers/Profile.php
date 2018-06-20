
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function Index()
    {
    $data['test'] = "mensaje de prueba";

		 $q=$this->db->get('usuarios');
		$this->load->view('myProfile',$data);
		$this->load->model('Users_model');
		
    }
    	public function modifyUser($id){
 			$data= array(
 				  "username"=> $this->input->post('username'),
                  "last_name"=>$this->input->post('last_name'),
                  "email"=>$this->input->post('email'),
                  "phone"=>$this->input->post('phone'),
                  "address"=>$this->input->post('address'),
                  "city"=>$this->input->post('city'),
                  "country"=>$this->input->post('country'),
                  "state"=>$this->input->post('state')
			);
			$this->Users_model->Actualizar($id,$data);
			$this->load->view('myProfile');

}
}