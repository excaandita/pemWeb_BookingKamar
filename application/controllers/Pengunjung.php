<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Pengunjung extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_loginpengunjung(); 
        $this->load->model(array('ModelPengunjung', 'ModelJenisKamar', 'ModelPemesanan'));
		    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		    $this->load->library('table');
		    $this->load->database();
    }  

    public function index() 
    {  
      $this->template->set('title', 'Home');
      $this->template->load('template_frontend', 'contents' , 'account/v_pengunjung');
    }

    public function editakun()
	  {
      $this->template->set('title', 'Profil');
      $this->template->load('template_frontend', 'contents' , 'frontend/editakun');
	  }

    public function booking()
	  {
      $data['query']=$this->ModelJenisKamar->get_all();
      $this->template->set('title', 'Booking');
      $this->template->load('template_frontend', 'contents' , 'frontend/booking', $data);
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
      redirect('loginpengunjung');
    }

    public function AksiBooking()
    {
  
      $data['id_pesan']=$_POST['id_pesan'];
      $data['id_pengunjung']=$_POST['id_pengunjung'];
      $data['id_jeniskamar']=$_POST['id_jeniskamar'];
      $data['check_in']=$_POST['check_in'];
      $data['check_out']=$_POST['check_out'];
      $data['jumlah_dewasa']=$_POST['jumlah_dewasa'];
      $data['jumlah_anak']=$_POST['jumlah_anak'];

      //HARI
      $tanggalawal = $data['check_in']; 
      $tanggalakhir = $data['check_out'];
      $tanggalawal = new DateTime($tanggalawal); 
      $tanggalakhir= new DateTime($tanggalakhir);
      $perbedaan = $tanggalawal->diff($tanggalakhir);
      $data['total_hari'] = $perbedaan->d ;

      $this->ModelPemesanan->insert_entry($data);
      $this->template->set('title', 'Booking');
		  $this->template->load('template_frontend', 'contents' , 'frontend/formsuccess',$data);
    }
  
}





