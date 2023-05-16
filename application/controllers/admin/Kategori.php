<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_Kategori');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) {
            redirect('admin/login');
        }
    }
    public function index() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $this->load->view('admin/header');
        $this->load->view('admin/view_kategori', $data);
        $this->load->view('admin/footer');
    }

    public function tambah() {
        if($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('admin/header');
        $this->load->view('admin/tambah_kategori');
        $this->load->view('admin/footer');
    }
    public function proses_tambah()
    {
        $nama_kategori = $this->input->post('nama_kategori');
            $data = array(
                'nama_kategori' => $nama_kategori,
            );
            $this->M_Kategori->insert($data); //simpan data ke database
            $this->session->set_flashdata('success', 'Data user berhasil ditambahkan.'); //set pesan sukses
            redirect('admin/dashboard/kategori'); //redirect ke halaman form tambah user
    }

    public function edit($id)
    {
        $data['kategori'] = $this->M_Kategori->get_by_id($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit_kategori', $data);
        $this->load->view('admin/footer');
    }

    public function proses_edit($id)
    {
        $nama_kategori = $this->input->post('nama_kategori');
            $data = array(
                'nama_kategori' => $nama_kategori,
            );
            $this->M_Kategori->update($id,$data); //simpan data ke database
            $this->session->set_flashdata('success', 'Data user berhasil ditambahkan.'); //set pesan sukses
            redirect('admin/dashboard/kategori'); //redirect ke halaman form tambah user
    }

    public function hapus($id_kategori)
    {
        $this->db->where('id_kategori',$id_kategori);
        $this->db->delete('tbl_kategori');
        redirect('admin/kategori');
    }
}