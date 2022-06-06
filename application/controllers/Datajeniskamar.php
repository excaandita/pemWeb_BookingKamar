<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Datajeniskamar extends CI_Controller {  
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
		$data['query']=$this->ModelJenisKamar->get_all();
		$this->template->set('title', 'Data Jenis Kamar');
		$this->template->load('template_backend', 'contents' , 'account/v_datajeniskamar', $data);
	}

	public function inputForm()
    {
            $this->form_validation->set_rules('id_jenis', 'ID Kamar', 'required');
            $this->form_validation->set_rules('nama_jenis', 'Nama Jenis Kamar', 'required');
            $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
            $this->form_validation->set_rules('pelayanan', 'Pelayanan', 'required');
			$this->form_validation->set_rules('harga', 'Harga', 'required');
            if ($this->form_validation->run() == FALSE)
			{
				$this->template->set('title', 'Data Jenis Kamar');
				$this->template->load('template_backend', 'contents' , 'jeniskamar/myform');
            }
            else
            {
				$data['id_jenis']=$_POST['id_jenis'];
				$data['nama_jenis']=$_POST['nama_jenis'];
                $data['fasilitas']=$_POST['fasilitas'];
				$data['pelayanan']=$_POST['pelayanan'];
                $data['harga']=$_POST['harga'];

				$this->ModelJenisKamar->insert_entry($data);
				$this->template->set('title', 'Data Jenis Kamar');
				$this->template->load('template_backend', 'contents' , 'jeniskamar/formsuccess',$data);
            }
    }
	
	public function editForm($id)
	{
		$DATA['record']=$this->ModelJenisKamar->GetDataJenisKamarHotel($id)->row_array();
		$this->template->set('title', 'Data Jenis Kamar');
		$this->template->load('template_backend', 'contents' , 'jeniskamar/editForm',$DATA);
	}
	public function AksiEdit()
    {
		$id_jenis = $this->input->post('id_jenis');
		$nama_jenis = $this->input->post('nama_jenis');
		$fasilitas = $this->input->post('fasilitas');
        $pelayanan = $this->input->post('pelayanan');
        $harga = $this->input->post('harga');
		$DataUpdate = array(
			'nama_jenis' => $nama_jenis,
			'fasilitas' => $fasilitas,
            'pelayanan' => $pelayanan,
			'harga' => $harga,
		);

		$this->ModelJenisKamar->EditDataJenisKamarHotel($DataUpdate, $id_jenis);
		redirect('datajeniskamar');
    }
	public function hapusForm($id)
	{
		$this->ModelJenisKamar->DeleteDataJenisKamarHotel($id);
		redirect('datajeniskamar');
	}
}  
