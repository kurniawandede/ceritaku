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
        $data['writer'] = $this->M_Cerita->penulis();
        $this->load->view('header', $data);
        $this->load->view('menu_cerita', $data);
        $this->load->view('footer');
    }
    public function terbaru() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['stories'] = $this->M_Cerita->get_stories('DESC');
        $data['writer'] = $this->M_Cerita->penulis();
        $this->load->view('header', $data);
        $this->load->view('terbaru', $data);
        $this->load->view('footer');
    }
    public function toprating() {
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['stories'] = $this->M_Cerita->get_topRating('DESC');
        $data['writer'] = $this->M_Cerita->penulis();
        $this->load->view('header', $data);
        $this->load->view('toprating', $data);
        $this->load->view('footer');
    }
    public function viewcerita($id_cerita) {
        
        $data['ktgr'] = (array) $this->M_Kategori->view_kategori();
        $data['cerita'] = $this->M_Cerita->get_cerita_by_id($id_cerita);
        $data['review'] = $this->M_Cerita->get_all_review($id_cerita);
        $data['rating_avg'] = $this->M_Cerita->get_rating_avg($id_cerita);
        $data['writer'] = $this->M_Cerita->penulis();
        $this->load->view('header', $data);
        $this->load->view('view_cerita', $data);
        $this->load->view('footer');
    }
    public function viewPerKategori($id_kategori)
{
    $data['ktgr'] = $this->M_Kategori->view_kategori();
    $data['cerita'] = $this->M_Cerita->get_cerita_by_kategori($id_kategori);
    $data['writer'] = $this->M_Cerita->penulis();
    $this->load->view('header', $data);
    $this->load->view('view_per_kategori', $data);
    $this->load->view('footer');
}
    public function viewByPenulis($id_user)
    {
        $data['ktgr'] = $this->M_Kategori->view_kategori();
        $data['cerita'] = $this->M_Cerita->get_cerita_by_penulis($id_user);
        $data['writer'] = $this->M_Cerita->penulis();
        $this->load->view('header', $data);
        $this->load->view('view_by_penulis', $data);
        $this->load->view('footer');
    }
    

    public function save_rating()
{
   $id_cerita = $this->uri->segment(3); // ambil nilai id cerita dari URL
   $rating = $this->input->post('rating');
   $review = $this->input->post('review');
   $id_user = $this->session->userdata('id_user');
   
   // Cek apakah pengguna sudah memberikan rating sebelumnya
   $existing_review = $this->db->get_where('tbl_review', array('id_cerita' => $id_cerita, 'id_user' => $id_user))->row();

   if ($existing_review) {
      // Jika pengguna sudah memberikan rating sebelumnya, update rating dan review yang ada
      $data = array(
         'rating' => $rating,
         'review' => $review,
         'tanggal' => date('Y-m-d H:i:s')
      );
      $this->db->where('id_review', $existing_review->id_review);
      $this->db->update('tbl_review', $data);
   } else {
      // Jika pengguna belum memberikan rating sebelumnya, simpan rating dan review baru
      $data = array(
         'id_cerita' => $id_cerita,
         'rating' => $rating,
         'review' => $review,
         'tanggal' => date('Y-m-d H:i:s'),
         'id_user' => $id_user
      );
      $this->db->insert('tbl_review', $data);
   }
   
   redirect('cerita/viewcerita/' . $id_cerita);
}



    

    

}
?>