<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Datapemesanan extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login(); 
        $this->load->model(array('ModelPemesanan', 'ModelJenisKamar'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
        $this->load->database(); 
    }  

    public function index() 
    {  
      $data['query']=$this->ModelPemesanan->get_all();
      $this->template->set('title', 'Data Pemesanan');
      $this->template->load('template_backend', 'contents' , 'account/v_datapemesanan', $data);
    }

    public function editForm($id)
    {

      $DATA['query']=$this->ModelJenisKamar->get_all()->result();
      $DATA['record']=$this->ModelPemesanan->GetDataPemesanan($id)->row_array();
      $this->template->set('title', 'Data Pemesanan');
      $this->template->load('template_backend', 'contents' , 'pemesanan/editForm', $DATA);
    }
  
    public function AksiEdit()
    {
      $id_pesan = $this->input->post('id_pesan');
      $id_pengunjung = $this->input->post('id_pengunjung');
      $id_jeniskamar = $this->input->post('id_jeniskamar');
      $check_in = $this->input->post('check_in');
      $check_out= $this->input->post('check_out');
      $jumlah_dewasa = $this->input->post('jumlah_dewasa');
      $jumlah_anak = $this->input->post('jumlah_anak');

      //HARI
      $tanggalawal = $check_in; 
      $tanggalakhir = $check_out;
      $tanggalawal = new DateTime($tanggalawal); 
      $tanggalakhir= new DateTime($tanggalakhir);
      $perbedaan = $tanggalawal->diff($tanggalakhir);
      $total_hari = $perbedaan->d ;

      $DataUpdate = array(
        'id_jeniskamar' => $id_jeniskamar,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'total_hari' => $total_hari,
        'jumlah_dewasa' => $jumlah_dewasa,
        'jumlah_anak' => $jumlah_anak,
      );
  
      $this->ModelPemesanan->EditDataPemesanan($DataUpdate, $id_pesan);
      redirect('datapemesanan');
    }
    public function hapusForm($id)
    {
      $this->ModelPemesanan->DeleteDataPemesanan($id);
      redirect('datapemesanan');
    }    

    
}  
