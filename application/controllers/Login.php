<?php
class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('M_Login');
        
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->M_Login->get_user($email, $password);

        if($user && $user['role'] == 2 || $user['role'] == 3) {
            $this->session->set_userdata('id_user', $user['id_user']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('fullname', $user['fullname']);
            $this->session->set_userdata('email', $user['email']);
            $this->session->set_userdata('logged_in', true); 
            $this->session->set_userdata('role', $user['role']);
            $this->session->set_flashdata('success', 'Login berhasil!');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah.');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('logged_in');
        redirect('login');
    }
    
}
?>