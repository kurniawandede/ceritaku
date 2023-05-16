<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_users', $data);
    }
    public function view_akun()
    {
        return $this->db->query("SELECT * FROM tbl_users")->result_array();
    }
    public function get_by_id($id)
    {
        $query = $this->db->get_where('tbl_users', array('id_user' => $id));
        return $query->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_users', $data);
    }

}
