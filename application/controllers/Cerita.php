<?php
class Cerita extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/M_Cerita');
        $this->load->model('admin/M_Kategori');
    }

    public function index() {
        $data['cerita'] = $this->M_Cerita->view_cerita();
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $this->load->view('header', $data);
        $this->load->view('menu_cerita', $data);
        $this->load->view('footer');
    }
    public function topview() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $this->load->view('header', $data);
        $this->load->view('topview');
        $this->load->view('footer');
    }
    public function toprating() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $this->load->view('header', $data);
        $this->load->view('toprating');
        $this->load->view('footer');
    }
    public function viewcerita($id_cerita) {
        
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['cerita'] = $this->M_Cerita->get_cerita_by_id($id_cerita);
        $data['rating_avg'] = $this->M_Cerita->get_rating_avg($id_cerita);
        $this->load->view('header', $data);
        $this->load->view('view_cerita', $data);
        $this->load->view('footer');
    }
    public function save_rating()
{
   $id_cerita = $this->uri->segment(3); // ambil nilai id cerita dari URL
   $rating = $this->input->post('rating');
   $review = $this->input->post('review');
   $id_user = $this->session->userdata('id_user');
   
   $data = array(
      'id_cerita' => $id_cerita, // isi kolom id_cerita dengan nilai dari URL
      'rating' => $rating,
      'review' => $review,
      'tanggal' => date('Y-m-d H:i:s'),
      'id_user' => $id_user
   );
   
   $this->db->insert('tbl_review', $data);
   
   redirect('cerita/viewcerita/' . $id_cerita);
}


    

    

}
?>