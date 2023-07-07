<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata_admin extends CI_Controller 
{
	public function detail_wisata($id)
	{
		$data['outdoor'] = $this->AdminWisata_model->get_data('outdoor')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['detailwisata'] = $this->AdminWisata_model->ambil_id_wisata($id);
		$data['outdoor'] = $this->AdminWisata_model->ambil_id_produk($id);

		$data['title'] = 'Detail Wisata';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/wisata_admin', $data);
		$this->load->view('admin/templates/admin_footer');
	}
}