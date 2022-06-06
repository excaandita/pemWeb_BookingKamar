<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelJenisKamar extends CI_Model {

    public $id_jenis;
    public $nama_jenis;
    public $fasilitas;
    public $pelayanan;
    public $harga;

    public function insert_entry($data)
    {       
            $this->db->insert('jeniskamar', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('jeniskamar');
        return $query;
        
    }

    public function EditDataJenisKamarHotel($data, $id)
    {
        $this->db->where('id_jenis', $id);
        $this->db->update('jeniskamar', $data);
    }
    function GetDataJenisKamarHotel($id)
	{
		$data = array('id_jenis' => $id);
		return $this->db->get_where('jeniskamar', $data);
	}
    public function DeleteDataJenisKamarHotel($id)
    {
        $this->db->where('id_jenis', $id);
        $this->db->delete('jeniskamar');
    }

    public function JumlahDataJenisKamar()
    {   
        $query = $this->db->get('jeniskamar');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('jeniskamar');
        $this->db->join('pesan', 'jeniskamar.id_jenis = pesan.id_jeniskamar');
        $this->db->order_by('');
        $query = $this->db->get();
        return $query;
        
    }

}
?>
