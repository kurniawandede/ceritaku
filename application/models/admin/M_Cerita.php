<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cerita extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('tbl_cerita', $data);
        return $this->db->insert_id();
    }

    public function view_cerita()
    {
        return $this->db->query("SELECT tc.*, tk.nama_kategori, tu.fullname
        FROM tbl_cerita tc
        JOIN tbl_kategori tk ON tc.id_kategori = tk.id_kategori
        JOIN tbl_users tu ON tc.id_user = tu.id_user
        ")->result_array();
    }
    public function get_cerita_by_user($id_user)
{
    return $this->db->query("SELECT tc.*, tk.nama_kategori, tu.fullname
        FROM tbl_cerita tc
        JOIN tbl_kategori tk ON tc.id_kategori = tk.id_kategori
        JOIN tbl_users tu ON tc.id_user = tu.id_user
        WHERE tc.id_user = '$id_user'
    ")->result_array();
}

    public function get_cerita_by_id($id_cerita)
    {
        return $this->db->query("SELECT tc.*, tk.nama_kategori, tu.fullname
        FROM tbl_cerita tc
        JOIN tbl_kategori tk ON tc.id_kategori = tk.id_kategori
        JOIN tbl_users tu ON tc.id_user = tu.id_user
        WHERE id_cerita = '$id_cerita'")->row_array();
    }

    public function get_rating_avg($id_cerita) {
        $this->db->select_avg('rating');
        $this->db->where('id_cerita', $id_cerita);
        $query = $this->db->get('tbl_review');
        return $query->row()->rating;
    }
    
    public function get_sampul($id) {
        $this->db->select('sampul');
        $this->db->from('tbl_cerita');
        $this->db->where('id_cerita', $id);
        $query = $this->db->get();
    
        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row->sampul;
        } else {
            return '';
        }
    }
    
    public function get_stories($sort_order = 'DESC') {
        $this->db->select('tc.*, tk.nama_kategori, tu.fullname, AVG(tr.rating) as rating_avg');
        $this->db->from('tbl_cerita tc');
        $this->db->join('tbl_kategori tk', 'tc.id_kategori = tk.id_kategori');
        $this->db->join('tbl_users tu', 'tc.id_user = tu.id_user');
        $this->db->join('tbl_review tr', 'tc.id_cerita = tr.id_cerita', 'left');
        $this->db->group_by('tc.id_cerita');
        $this->db->order_by('tc.tanggal', $sort_order);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    

    public function get_all_kategori()
    {
        return $this->db->get('tbl_kategori')->result();
    }
    public function get_by_id($id)
    {
        $query = $this->db->get_where('tbl_cerita', array('id_cerita' => $id));
        return $query->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_cerita', $id);
        $this->db->update('tbl_cerita', $data);
    }
}
