<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('ModelAdmin');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->library('table');
		$this->load->database();
		
    }

	public function inputAdmin()
    {
			$this->form_validation->set_rules('username', 'Username','required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');

            if ($this->form_validation->run() == FALSE)
			{
				$data['query']=$this->ModelAdmin->get_all();
				$this->template->set('title', '');
				$this->template->load('template_login', 'contents' , 'admin/myform',$data ); 
            }
            else
            {
				$data['id_admin']=$_POST['id_admin'];
				$data['username']=$_POST['username'];
				$data['password']=md5($_POST['password']);
				$data['nama']=$_POST['nama'];

				$this->ModelAdmin->insert_entry($data);
				$this->load->view('admin/formsuccess',$data);
            }
    }

}