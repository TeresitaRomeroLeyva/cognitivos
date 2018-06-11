
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function Index()
    {
    $data['test'] = "mensaje de prueba";

		
		$this->load->view('myProfile',$data);
		
    }
}