<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function is_login()
{
    return true;
}

class admin extends CI_Controller{
    
    public function index()
    {
            if(is_login())
            {
                $this->load->helper('url');
                $this->load->view('admin');
            }
    }
    
    public function news_manage()
    {
            if(is_login())
            {
                $this->load->helper('url');
                $this->load->view('admin-news-manage');
            }
    }
    
    public function user_manage()
    {
            if(is_login())
            {
                $this->load->helper('url');
                $this->load->view('admin-user-manage');
            }
    }
    
    public function approve_no()
    {
         
    }
    
    public function approve_yes()
    {
        
    }
    
    public function homepage_service()
    {
        
    }
    
    public function homepage_guarantee()
    {}
    
    
}