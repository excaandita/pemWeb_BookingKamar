<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Datapengunjung extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login();  
        $this->load->model(array('ModelPengunjung'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
        $this->load->database(); 
    }  

    public function index() 
    {   
      $data['query']=$this->ModelPengunjung->get_all();
      $this->template->set('title', 'Data Pengunjung');
      $this->template->load('template_backend', 'contents' , 'account/v_datapengunjung', $data);
    }

    public function inputForm()
    {
			$this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('status', 'Status', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('nomor_hp', 'Nomor Hp', 'required');
      if ($this->form_validation->run() == FALSE)
			{
          $data['query']=$this->ModelPengunjung->get_all();
					$this->template->set('title', 'Data Pengunjung');
					$this->template->load('template_backend', 'contents' , 'pengunjung/myform', $data);
      }
      else
      {
				$data['nama']=$_POST['nama'];
				$data['username']=$_POST['username'];
        $data['password']=md5($_POST['password']);
        $data['status']=$_POST['status'];
        $data['alamat']=$_POST['alamat'];
        $data['nomor_hp']=$_POST['nomor_hp'];

				$this->ModelPengunjung->insert_entry($data);
				$this->template->set('title', 'Data Pengunjung');
				$this->template->load('template_backend', 'contents' , 'pengunjung/formsuccess', $data);
      }
    }
	
	public function editForm($id)
	{
    $DATA['query']=$this->ModelPengunjung->GetDataPengunjung($id)->row_array();
		$this->template->set('title', 'Data Pengunjung');
		$this->template->load('template_backend', 'contents' , 'pengunjung/editForm', $DATA);
	}

	public function AksiEdit()
  {
		$id_pengunjung = $this->input->post('id_pengunjung');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
    $password = $this->input->post('password');
    $passwordx = md5($password);
    $status = $this->input->post('status');
    $alamat = $this->input->post('alamat');
    $nomor_hp = $this->input->post('nomor_hp');
		$DataUpdate = array(
			'nama' => $nama,
			'username' => $username,
      'password' => $passwordx,
			'status' => $status,
      'alamat' => $alamat,
			'nomor_hp' => $nomor_hp,
		);

		$this->ModelPengunjung->EditDataPengunjung($DataUpdate, $id_pengunjung);
		redirect('datapengunjung');
  }
	public function hapusForm($id)
	{
		$this->ModelPengunjung->DeleteDataPengunjung($id);
		redirect('datapengunjung');
	}
}  
