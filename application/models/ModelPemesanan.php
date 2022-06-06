<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPemesanan extends CI_Model {

    public $id_pengunjung;
    public $id_jeniskamar;
    public $id_pesan;
    public $check_in;
    public $check_out;
    public $total_hari;
    public $jumlah_dewasa;
    public $jumlah_anak;
    public $total_harga;

    public function insert_entry($data)
    {       
        $this->db->insert('pesan', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('pesan');
        return $query;
        
    }
    public function EditDataPemesanan($data, $id)
    {
        $this->db->where('id_pesan', $id);
        $this->db->update('pesan', $data);
    }
    function GetDataPemesanan($id)
	{
		$data = array('id_pesan' => $id);
		return $this->db->get_where('pesan', $data);
	}
    public function DeleteDataPemesanan($id)
    {
        $this->db->where('id_pesan', $id);
        $this->db->delete('pesan');
    }

    public function JumlahDataPemesanan()
    {   
        $query = $this->db->get('pesan');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

}
