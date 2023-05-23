<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_kategori', $data);
    }
    public function view_kategori()
    {
        return $this->db->query("SELECT * FROM tbl_kategori")->result_array();
    }
    
    public function get_kategori()
    {
        return $this->db->query("SELECT * FROM tbl_kategori")->result();
    }
    public function get_by_id($id)
    {
        $query = $this->db->get_where('tbl_kategori', 
                array('id_kategori' => $id));
        return $query->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('tbl_kategori', $data);
    }
}
