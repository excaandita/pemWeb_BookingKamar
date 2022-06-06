<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKamar extends CI_Model {
    
    public $id_kamar;
    public $nomor_kamar;
    public $jenis_kamar;

    public function insert_entry($data)
    {       
            $this->db->insert('kamar', $data);
    }
    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->join('jeniskamar', 'kamar.jenis_kamar = jeniskamar.id_jenis');
        $this->db->order_by('id_kamar ASC');
        $query = $this->db->get();
        return $query;
        
    }
    public function get_all()
    {
        $query = $this->db->get('kamar');
        return $query;
        
    }
    public function EditDataKamarHotel($data, $id)
    {
        $this->db->where('id_kamar', $id);
        $this->db->update('kamar', $data);
    }
    function GetDataKamarHotel($id)
	{
		$data = array('id_kamar' => $id);
		return $this->db->get_where('kamar', $data);
	}
    public function DeleteDataKamarHotel($id)
    {
        $this->db->where('id_kamar', $id);
        $this->db->delete('kamar');
    }

    public function JumlahDataKamar()
    {   
        $query = $this->db->get('kamar');
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
