<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Dashboard extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login(); 
        $this->load->model(array('ModelKamar', 'ModelJenisKamar', 'ModelPengunjung', 'ModelPemesanan'));
		    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		    $this->load->library('table');
		    $this->load->database();
    }  

    public function index() 
    {  
      $data['total_kamar'] = $this->ModelKamar->JumlahDataKamar();
      $data['total_jeniskamar'] = $this->ModelJenisKamar->JumlahDataJenisKamar();
      $data['total_pengunjung'] = $this->ModelPengunjung->JumlahDataPengunjung();
      $data['total_pemesanan'] = $this->ModelPemesanan->JumlahDataPemesanan();
      $this->template->set('title', 'Dashboard');
      $this->template->load('template_backend', 'contents' , 'account/v_dashboard', $data);
    }
}  

