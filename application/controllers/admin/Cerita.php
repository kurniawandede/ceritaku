<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin/M_Cerita');
        $this->load->model('admin/M_Kategori');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) {
            redirect('admin/login');
        }
    }
    public function index() {
        if($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['cerita'] = $this->M_Cerita->view_cerita();
        // $data['cerita'] = $this->M_Cerita->view_penulis();
        $this->load->view('admin/header');
        $this->load->view('admin/view_cerita', $data);
        $this->load->view('admin/footer');
    }

    public function tambahCerita() {
        if($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['error'] = $this->session->flashdata('error');
        $data['kategori'] = $this->M_Kategori->get_kategori();
        $this->load->view('admin/header');
        $this->load->view('admin/tambah_cerita', $data);
        $this->load->view('admin/footer');
    }
    public function input() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi_cerita', 'Isi Cerita', 'required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['kategori'] = $this->M_Cerita->get_all_kategori();
            redirect('admin/cerita');
        } else {
            $data = array(
                'id_user' => $this->session->userdata('id_user'),
                'judul' => $this->input->post('judul'),
                'isi_cerita' => $this->input->post('isi_cerita'),
                'tanggal' => date('Y-m-d H:i:s'),
                'id_kategori' => $this->input->post('id_kategori'),
            );
    
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('sampul')) {
                $error = array('error' => $this->upload->display_errors());
                redirect('admin/dashboard/cerita/tambah', $error);
            } else {
                $upload_data = $this->upload->data();
                $data['sampul'] = $upload_data['file_name'];
                $this->M_Cerita->insert($data);
                $error = array('error' => 'Gagal menyimpan data');
                redirect('admin/cerita');
            }
        }
    }

    public function edit($id)
    {
        $data['cerita'] = $this->M_Cerita->get_by_id($id); //mengambil data user dari database
        $data['kategori'] = $this->M_Kategori->get_kategori();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_cerita', $data);
        $this->load->view('admin/footer');
    }

    public function proses_edit($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi_cerita', 'Isi Cerita', 'required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/cerita');
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi_cerita' => $this->input->post('isi_cerita'),
                'tanggal' => date('Y-m-d H:i:s'),
                'id_kategori' => $this->input->post('id_kategori'),
            );
    
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $this->load->library('upload', $config);
    
            $file_sampul = $this->M_Cerita->get_sampul($id); //ambil data sampul dari database
            if (!$this->upload->do_upload('sampul')) {
                //cek apakah user mengunggah file sampul
                if($file_sampul) { //jika ada file sampul sebelumnya
                    $data['sampul'] = $file_sampul; //gunakan file sampul sebelumnya
                } else { //jika tidak ada file sampul sebelumnya
                    $data['sampul'] = ''; //kosongkan data sampul
                }
            } else {
                $upload_data = $this->upload->data();
                $data['sampul'] = $upload_data['file_name'];
            }
    
            $this->M_Cerita->update($id,$data);
            $error = array('error' => 'Gagal menyimpan data');
            redirect('admin/cerita');
        }
    }
    

    public function hapus($id_cerita)
    {
        $this->db->where('id_cerita',$id_cerita);
        $this->db->delete('tbl_cerita');
        redirect('admin/cerita');
    }
    

}