<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Datakamar extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login(); 
        $this->load->model(array('ModelKamar', 'ModelJenisKamar'));
		$this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
		$this->load->database(); 
    }  

    public function index()
	{
		$data['query']=$this->ModelKamar->get_all();
		$this->template->set('title', 'Data Kamar');
		$this->template->load('template_backend', 'contents' , 'account/v_datakamar', $data);
	}

	public function inputForm()
    {
			$this->form_validation->set_rules('nomor_kamar', 'Nomor Kamar', 'required');
            if ($this->form_validation->run() == FALSE)
			{
               		$data['query']=$this->ModelJenisKamar->get_all();
					$this->template->set('title', 'Data Kamar');
					$this->template->load('template_backend', 'contents' , 'kamar/myform', $data);
            }
            else
            {
				$data['nomor_kamar']=$_POST['nomor_kamar'];
				$data['jenis_kamar']=$_POST['jenis_kamar'];
				$data['status_kamar']=$_POST['status_kamar'];

				$this->ModelKamar->insert_entry($data);
				$this->template->set('title', 'Data Kamar');
				$this->template->load('template_backend', 'contents' , 'kamar/formsuccess', $data);
            }
    }
	
	public function editForm($id)
	{
		
		$DATA['query']=$this->ModelJenisKamar->get_all()->result();
		$DATA['record']=$this->ModelKamar->GetDataKamarHotel($id)->row_array();
		$this->template->set('title', 'Data Kamar');
		$this->template->load('template_backend', 'contents' , 'kamar/editForm', $DATA);
	}
	public function AksiEdit()
    {
		$id_kamar = $this->input->post('id_kamar');
		$nomor_kamar = $this->input->post('nomor_kamar');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$status_kamar = $this->input->post('status_kamar');
		$DataUpdate = array(
			'nomor_kamar' => $nomor_kamar,
			'jenis_kamar' => $jenis_kamar,
			'status_kamar' => $status_kamar,
		);

		$this->ModelKamar->EditDataKamarHotel($DataUpdate, $id_kamar);
		redirect('datakamar');
    }
	public function hapusForm($id)
	{
		$this->ModelKamar->DeleteDataKamarHotel($id);
		redirect('datakamar');
	}
}  
