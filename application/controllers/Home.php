<?php
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/M_Kategori');
        $this->load->model('M_Profiles');

    }

    public function index() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        
        $this->load->view('header', $data);
        $this->load->view('landing');
        $this->load->view('footer');
    }
}
?>