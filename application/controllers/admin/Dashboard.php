<?php
class Dashboard extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/M_Login');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) {
            redirect('admin/login');
        }
        
        
        
    }

    public function index() {
        
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
        
    }
}
?>