
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function myProfile()
    {
    $data['test'] = "mensaje de prueba";

		
		$this->load->view('miCuenta',$data);
		
    }
}