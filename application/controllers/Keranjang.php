<?php

class Keranjang extends CI_Controller {
  
  public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('AdminWisata_model');
		
		
	}
  
  public function index() {
    // tampilkan halaman keranjang
    $data['transaksi_outdoor'] = $this->AdminWisata_model->get_data('transaksi_outdoor')->result();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['outdoor'] = $this->AdminWisata_model->get_data('outdoor')->result();

	$data['title'] = 'Penyewaan';
	$this->load->view('wisatawan/templates/wisatawan_header', $data);
	$this->load->view('wisatawan/templates/wisatawan_bar', $data);
	$this->load->view('wisatawan/keranjang', $data);
	$this->load->view('wisatawan/templates/wisatawan_footer');

  }
  
 
    public function delete_produk($id_sewa)
	{
		$where = array('id_sewa' => $id_sewa);
		$this->AdminWisata_model->delete_data($where, 'transaksi_outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('keranjang');
	}
  
}