<?php
class Profiles extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 1 ) {
            redirect('login');
        }
        $this->load->library('session');
        $this->load->model('admin/M_Kategori');
        $this->load->model('admin/M_Cerita');
        $this->load->model('M_Profiles');

    }
    public function index() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $this->load->view('header', $data);
        $this->load->view('profiles');
        $this->load->view('footer');
    }
    public function publis() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['kategori'] = (array) $this->M_Kategori->get_kategori();
        $this->load->view('header', $data);
        $this->load->view('publis_cerita');
        $this->load->view('footer');
    }
    public function input() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi_cerita', 'Isi Cerita', 'required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['kategori'] = $this->M_Cerita->get_all_kategori();
            $this->load->view('publis_cerita', $data);
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
                $this->load->view('view_form_cerita', $error);
            } else {
                $upload_data = $this->upload->data();
                $data['sampul'] = $upload_data['file_name'];
                $this->M_Cerita->insert($data);
                redirect('profile/ceritamu');
            }
        }
    }
    public function edit($id)
    {   
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['writer'] = $this->M_Cerita->penulis();
        $data['akun'] = $this->M_User->get_by_id($id); //mengambil data user dari database
        $this->load->view('header', $data);
        $this->load->view('edit_akun', $data);
        $this->load->view('footer');
    }

    public function proses_edit($id)
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

    public function ceritamu()
{
    $id_user = $this->session->userdata('id_user');
    $data['cerita'] = $this->M_Cerita->get_cerita_by_user($id_user);
    $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
    $this->load->view('header', $data);
    $this->load->view('ceritamu', $data);
    $this->load->view('footer');
}


}
?>