<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_User');
        $this->load->library('form_validation');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) {
            redirect('admin/login');
        }
    }
    public function tambah() {
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('admin/header');
        $this->load->view('admin/tambah_akun');
        $this->load->view('admin/footer');
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
        $this->load->view('admin/tambah_akun');
    }
    else //jika validasi berhasil
    {
        //mengambil data dari form
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password, //enkripsi password dengan Bcrypt
                'role' => $role,
            );
            $this->M_User->insert($data); //simpan data ke database
            $this->session->set_flashdata('success', 'Data user berhasil ditambahkan.'); //set pesan sukses
            redirect('admin/dashboard/akun'); //redirect ke halaman form tambah user
    }
}

    public function index()
	{
		$data['akun'] = (array) $this->M_User->view_akun();
		$this->load->view('admin/header');
        $this->load->view('admin/view_akun', $data);
        $this->load->view('admin/footer');
	}
    

    

        public function edit($id)
    {
        $data['akun'] = $this->M_User->get_by_id($id); //mengambil data user dari database
        $this->load->view('admin/header');
        $this->load->view('admin/edit_akun', $data);
        $this->load->view('admin/footer');
    }

    public function proses_edit($id)
    {
        //validasi input dari form
        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) //jika validasi gagal
        {
            $data['akun'] = $this->M_User->get_by_id($id);
            $this->load->view('admin/edit_akun', $data);
        }
        else //jika validasi berhasil
        {
            //mengambil data dari form
            $fullname = $this->input->post('fullname');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password, //enkripsi password dengan Bcrypt
                'role' => $role,
            );
            $this->M_User->update($id, $data); //update data ke database
            $this->session->set_flashdata('success', 'Data user berhasil diubah.'); //set pesan sukses
            redirect('admin/dashboard/akun'); //redirect ke halaman form view akun
        }
    }

    


    public function hapus($id_user)
    {
        $this->db->where('id_user',$id_user);
        $this->db->delete('tbl_users');
        redirect('admin/user');
    }
}