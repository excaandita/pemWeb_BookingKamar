<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPengunjung extends CI_Model {

    public $id_pengunjung;
    public $username;
    public $password;
    public $nama;
    public $alamat;
    public $status;
    public $nomor_hp;

    public function insert_entry($data)
    {       
        $this->db->insert('pengunjung', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('pengunjung');
        return $query;
        
    }
    public function EditDataPengunjung($data, $id)
    {
        $this->db->where('id_pengunjung', $id);
        $this->db->update('pengunjung', $data);
    }
    function GetDataPengunjung($id)
	{
		$data = array('id_pengunjung' => $id);
		return $this->db->get_where('pengunjung', $data);
	}
    public function DeleteDataPengunjung($id)
    {
        $this->db->where('id_pengunjung', $id);
        $this->db->delete('pengunjung');
    }

    public function JumlahDataPengunjung()
    {   
        $query = $this->db->get('pengunjung');
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
