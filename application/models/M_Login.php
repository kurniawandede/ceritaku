<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('tbl_users');

        if($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
?>