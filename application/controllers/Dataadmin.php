<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Dataadmin extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login(); 
        $this->load->model('ModelAdmin');
		    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		    $this->load->library('table');
		    $this->load->database();
    }  

    public function index() 
    {  
      $data['query']=$this->ModelAdmin->get_all();
      $this->template->set('title', 'Data Admin');
      $this->template->load('template_backend', 'contents' , 'account/v_dataadmin', $data);
    }

    public function inputAdmin()
    {
			$this->form_validation->set_rules('username', 'Username','required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');

      if ($this->form_validation->run() == FALSE)
			{
				$data['query']=$this->ModelAdmin->get_all();
        $this->template->set('title', 'Data Admin');
		    $this->template->load('template_backend', 'contents' , 'dataadmin/myform', $data);
      }
      else
      {
				$data['id_admin']=$_POST['id_admin'];
				$data['username']=$_POST['username'];
				$data['password']=md5($_POST['password']);
				$data['nama']=$_POST['nama'];

				$this->ModelAdmin->insert_entry($data);
        $this->template->set('title', 'Data Admin');
		    $this->template->load('template_backend', 'contents' , 'dataadmin/formsuccess',$data);
      }
    }

    public function editForm($id)
    {
      $DATA['query']=$this->ModelAdmin->GetDataAdmin($id)->row_array();
      $this->template->set('title', 'Data Admin');
      $this->template->load('template_backend', 'contents' , 'dataadmin/editForm',$DATA);
    }

  	public function AksiEdit()
    {
      $id_admin = $this->input->post('id_admin');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $passwordx = md5($password);
      $nama = $this->input->post('nama');
      $DataUpdate = array(
        'username' => $username,
        'password' => $passwordx,
        'nama' => $nama,
      );

      $this->ModelAdmin->EditDataAdmin($DataUpdate, $id_admin);
      redirect('dataadmin');
    }

    public function hapusForm($id)
    {
      $this->ModelAdmin->DeleteDataAdmin($id);
      redirect('dataadmin');
    }
    
}  
