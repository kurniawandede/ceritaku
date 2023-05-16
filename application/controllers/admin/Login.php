<?php
class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/M_Login');
        
    }

    public function index() {
        $this->load->view('admin/admin_login');
    }

    // public function login() {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');
    //     $user = $this->M_Login->get_user($email, $password);
    
    //     if($user) {
    //         $this->session->set_userdata('id_user', $user['id_user']);
    //         $this->session->set_userdata('fullname', $user['fullname']);
    //         $this->session->set_userdata('logged_in', true); // menyetel logged_in menjadi true
    //         echo "<script>alert('Berhasil Login')</script>";
    //         redirect('admin/dashboard');
    //     } else {
    //         $this->session->set_flashdata('error', 'Email atau password salah. Silahkan coba lagi!');
    //         redirect('admin/login');
    //     }
    // }
    
    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->M_Login->get_user($email, $password);
    
        if($user) {
            if (in_array($user['role'], array(1))) { // mengecek apakah role pengguna memiliki hak akses ke dashboard
                $this->session->set_userdata('id_user', $user['id_user']);
                $this->session->set_userdata('fullname', $user['fullname']);
                $this->session->set_userdata('logged_in', true); // menyetel logged_in menjadi true
                $this->session->set_userdata('role', $user['role']);
                echo "<script>alert('Berhasil Login')</script>";
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses ke dashboard. Silahkan hubungi administrator!');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah. Silahkan coba lagi!');
            redirect('admin/login');
        }
    }
    

    public function logout() {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('logged_in');
        redirect('admin/login');
    }
    
}
?>