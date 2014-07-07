<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
    public function index(){
            $this->load->view("head");
    }
    public function login(){
        $from=$this->input->post();
        
    }
    public function reg()
     {
        
            }
}