<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function show_alert_redirect($alert_msg,$redirect_url)
{
        echo"<SCRIPT LANGUAGE=javascript>alert($alert_msg);window.location=$redirect_url;</SCRIPT>";
}


class user extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
      
    }
    
    public function index(){
            $this->load->view("head");
    }
    public function login(){
       $user_name= $this->input->post('name');
       $user_password = $this->input->post('password');
       $encrypt_password = md5($user_password);
       $this->load->database();
       $query=$this->db->get_where("user",array('user_name'=>$user_name,'password'=>$encrypt_password))
               ->result();
  
       if(count($query)>0){
           show_alert_redirect('"login success"', '"../../index.php"');
       }
       else {
           //登录失败处理
           show_alert_redirect("登录失败", "../../index.php");
       }
      
    }
    
    public function reg()
     {
        $from =$this->input->post();
        $this->load->database();
        $new_user=array();
        $new_user['name']=$from['name'];
        $new_user['password']=md5($from['password']);
        $new_user['type']=1;
        $query = $this->db->get_where("user",array('user_name'=>$from['name']))->result();
        if(count($query)==0){
            if($from['tpye']==1)
            {
                   $new_user['company-name']=$from['company-name'];
                   //TODO 上传文件
            }
            $new_user['real-name']=$from['real-name'];
            $new_user['tel']=$from['tel'];
            $new_user['address']=$from['address'];
            $this->db->insert('user',$new_user);
        }
   
     }
}