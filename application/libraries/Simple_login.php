<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Simple_login {
	 
	// SET SUPER GLOBAL
	var $CI = NULL;
	 
	/**
	* Class constructor
	*
	* @return   void
	*/
	public function __construct() {
		$this->CI =& get_instance();
	}
	 
	public function login($username, $password) {
					 
		//cek username dan password
		$query = $this->CI->db->get_where('admin',array('username'=>$username,'password' => $password));
		 
		if($query->num_rows() == 1) {
			//ambil data user berdasar username
			$row  		= $this->CI->db->query('SELECT * FROM admin where username = "'.$username.'"');
			$admin   	= $row->row();
			$id   		= $admin->username;
			$nama   	= $admin->nama;
			 
			//set session user
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			$this->CI->session->set_userdata('nama', $nama);
			 
			//redirect ke halaman dashboard
			redirect(site_url('dashboard'));
		}else{
			 
			//jika tidak ada, set notifikasi dalam flashdata.
			$this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
			 
			//redirect ke halaman login
			redirect(site_url('login'));
		}
		return false;
	}
			 
	/**
	* Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
	* login
	*/
	public function cek_login() {
		 
		//cek session username
		if($this->CI->session->userdata('username') == '') {
			 
			//set notifikasi
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			 
			//alihkan ke halaman login
			redirect(site_url('login'));
		}
	}
	 
	/**
	* Hapus session, lalu set notifikasi kemudian di alihkan
	* ke halaman login
	*/
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(site_url('login'));
	}

	public function loginpengunjung($username, $password) {
					 
		//cek username dan password
		$query = $this->CI->db->get_where('pengunjung',array('username'=>$username,'password' => $password));
		 
		if($query->num_rows() == 1) {
			//ambil data user berdasar username
			$row  			= $this->CI->db->query('SELECT * FROM pengunjung where username = "'.$username.'"');
			$pengunjung   	= $row->row();
			$id_pengunjung  = $pengunjung->id_pengunjung;
			$username  		= $pengunjung->username;
			$password		= $pengunjung->password;
			$nama   		= $pengunjung->nama;
			$status 		= $pengunjung->status;
			$alamat   		= $pengunjung->alamat;
			$nomor_hp 		= $pengunjung->nomor_hp;
			 
			//set session user
			//$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id_pengunjung', $id_pengunjung);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('password', $password);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('alamat', $alamat);
			$this->CI->session->set_userdata('nomor_hp', $nomor_hp);
			 
			//redirect ke halaman dashboard
			redirect(site_url('pengunjung'));
		}else{
			 
			//jika tidak ada, set notifikasi dalam flashdata.
			$this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
			 
			//redirect ke halaman login
			redirect(site_url('loginpengunjung'));
		}
		return false;
	}
			 
	/**
	* Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
	* login
	*/
	public function cek_loginpengunjung() {
		 
		//cek session username
		if($this->CI->session->userdata('username') == '') {
			 
			//set notifikasi
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			 
			//alihkan ke halaman login
			redirect(site_url('loginpengunjung'));
		}
	}
	 
	/**
	* Hapus session, lalu set notifikasi kemudian di alihkan
	* ke halaman login
	*/
	public function logoutpengunjung() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(site_url('loginpengunjung'));
	}
}
