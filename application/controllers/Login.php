<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {

    public function index() {  
        $valid = $this->form_validation;  
        $username = $this->input->post('username');  
        $password = $this->input->post('password'); 
        $passwordx= md5($password); //this is for change $password into MD5 form 
        $valid->set_rules('username','Username','required');  
	    $valid->set_rules('password','Password','required');  

        if($valid->run()) {  
            $this->simple_login->login($username,$passwordx, base_url('dashboard'), base_url('login'));  
        }  
        $this->template->set('title', '');
		$this->template->load('template_login', 'contents' , 'account/v_login'); 
    }  

    public function logout(){  
        $this->simple_login->logout();  
    }                 
}  
