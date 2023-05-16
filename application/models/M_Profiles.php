<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Profiles extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('tbl_users', array('id_cerita' => $id));
        return $query->row_array();
    }
}

?>