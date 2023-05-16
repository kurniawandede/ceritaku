<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Register');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $this->load->view('daftar');
    }

    public function proses_tambah()
    {
        //validasi input dari form
        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
    
        if ($this->form_validation->run() == FALSE) //jika validasi gagal
        {
            $this->load->view('daftar');
        }
        else //jika validasi berhasil
        {
            //mengambil data dari form
            $fullname = $this->input->post('fullname');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
    
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'password' => ($this->input->post('password')),
                'role' => $this->input->post('role') // menetapkan nilai peran yang dipilih oleh pengguna
            );
            $this->M_Register->insert($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil, silahkan login!');
            redirect('login');
        }
    }
    

}