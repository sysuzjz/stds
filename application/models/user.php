<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function has_user($user_name){
        $query= $this->db->get_where('user',array('user_name'=>$user_name));
        if(count($query->reslut())==0){
            return false;
        }
        else
        {
            return true;
        }
    }
    
    public function login($user_name,$password)
    {
        $query = $this->db->get_where('user',array('user_name'=>$user_name));
        if(count($query)>0){
            $tmp_user_password=$query->reslut()->password;
            if($tmp_user_password==$password) {
                return true;
            }
            else{
                return false;
            }
        }
    }
}
