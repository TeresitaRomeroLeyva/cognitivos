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
 		$q=$this->db->get('usersusers');
 	   	
 		if ($q->num_rows() > 0) 
 		{
 			return $q->row();
 		}
 		
 		return false;
 	}
 	
 	public function guardar($data){

 		$this->db->INSERT("usersusers",$data);
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
                        ->get('usersusers');
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
        return $this->db->update('usersusers',$data);
    }
    public function actualizarDatoos($id,$campos){
         $this->db->where('id',$id);
         $this->db->update('usersusers', $campos);
      
	}


    public function recovery($password, $email){

                $data = array(
            'email'=>$email,
            'password' => $password
        );
        return $this->db->insert('usersusers', $data);

    }

    }

