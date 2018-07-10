<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  * 
  */
 class Users_model extends CI_Model
 {
 

 	public function __construct()
 	{
 		# code...
 		parent:: __construct();

 	}

 	public function login ($email, $password){

 		$this->db->where('email', $email);
 		$this->db->where('password',$password);
 		$q=$this->db->get('usuarios');
 	   	
 		if ($q->num_rows() > 0) 
 		{
 			return $q->row();
 		}
 		
 		return false;
 	}
 	
 	public function guardar($data){

 		$this->db->INSERT("usuarios",$data);
 		if ($this->db->affected_rows()>0) {
 			# code...
 			return true;
 		}
 		else{
 			return false;
 		}
 	}
    public function getCurrPassword($userid){

        $query=$this->db->where(['id'=>$userid])
                        ->get('usuarios');
        if ($query->num_rows()>0) {

            # code...
            return $query->row();
        }
    }
    public function updatePassword($data,$id){
        $this->db->where('id',$id);
        $data= array(
           'password'=>$data['password']    
        );
        return $this->db->update('usuarios',$data);
    }
    public function actualizarDatoos($id,$campos){
         $this->db->where('id',$id);
         $this->db->update('usuarios', $campos);
      

     
     
     

 	}


    public function verify_reset_Password_Code(){

    }

    public function email_exist($email){
        $sql="SELECT username, email FROM usuarios where email='{$email}'LIMIT 1";
        $result=$this->db->query($sql);
        $row=$result->row();

        return ($result->num_rows()===1 && $row->email)? $row->username :false;

    }
    


}

