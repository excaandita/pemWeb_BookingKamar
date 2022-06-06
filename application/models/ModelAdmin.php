<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {

    public $id_admin;
    public $username;
    public $password;
    public $nama;

    public function insert_entry($data)
    {       
        $this->db->insert('admin', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('admin');
        return $query;
        
    }
    public function EditDataAdmin($data, $id)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }
    function GetDataAdmin($id)
	{
		$data = array('id_admin' => $id);
		return $this->db->get_where('admin', $data);
	}
    public function DeleteDataAdmin($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
    }

}
