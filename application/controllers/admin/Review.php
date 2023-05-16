<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) {
            redirect('admin/login');
        }
    }
    public function index() {
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('admin/header');
        $this->load->view('admin/view_review');
        $this->load->view('admin/footer');
    }
}