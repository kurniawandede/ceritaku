<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Register extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_users', $data);
    }
}
