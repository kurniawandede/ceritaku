<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($email, $password)
{
    $this->db->select('*');
    $this->db->from('tbl_users');
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get();
    $result = $query->row_array();
    
    // Tambahkan kondisi jika role bukan 1 maka return null
    if($result && $result['role'] != 1) {
        return null;
    }
    
    return $result;
}

}
?>