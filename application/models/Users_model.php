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
        $this->db->get('usersuser_profiles');

        if ($q->num_rows() > 0) 
        {
            return $q->row();
        }
        
        return false;
    }
    
    public function register($data,$user_perfil){
        
        $this->db->INSERT("usersusers",$data); 
        $id= $this->db->insert_id();
        $user_perfil['user_id']=$id;
        $this->db->INSERT("usersuser_profiles",$user_perfil);
        if ($this->db->affected_rows()>0) {
            # code...
            return true;
        }
        else{
            return false;
        }
        
        }
    public function getCurrPassword($id,$password){

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
    public function updateData($id,$campos, $campos_perfil){
        
         $this->db->where('id',$id);
         $this->db->update('usersusers', $campos);
          $this->db->where('user_id',$id);
         $this->db->update('usersuser_profiles', $campos_perfil);

        if ($this->db->affected_rows()>0) {
            # code...
            return true;
        }
        else{
            return false;
        }
        


    }


    
  public  function change_password($newpass)
        {
            $email=$this->input->post('email');
            $this->db->where('email', $email);
            $this->db->set('password',$newpass);
            $this->db->update('usersusers');
            if($this->db->affected_rows() > 0){

              return TRUE  ;
            }
            else
                return FALSE;
            
        }



    }