<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->load->model('AdminWisata_model');
		
	}

	public function filter()
	{
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$this->_rules();

		if($this->form_validation->run() == FALSE) {

			$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
			$data['title'] = 'Filter Laporan Transaksi';
			$this->load->view('admin/templates/admin_header', $data);
			$this->load->view('admin/templates/admin_bar', $data);
			$this->load->view('admin/filter_laporan');
			$this->load->view('admin/templates/admin_footer');
		}else{
			$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
			$data['laporan'] = $this->db->query("SELECT * FROM transaksi_tiket tt, admin_wisata aw, user us WHERE tt.email_admin=aw.email_admin AND tt.id=us.id AND date(tgl_booking) >= '$dari' AND date(tgl_booking) <= '$sampai'")->result();
			$data['title'] = 'Filter Laporan Transaksi';
			$this->load->view('admin/templates/admin_header', $data);
			$this->load->view('admin/templates/admin_bar', $data);
			$this->load->view('admin/tampilkan_laporan');
			$this->load->view('admin/templates/admin_footer');
		}
	}

	public function print_laporan()
	{
		$dari 	= $this->input->get('dari');
		$sampai = $this->input->get('sampai');

		$data['laporan'] = $this->db->query("SELECT * FROM transaksi_tiket tt, admin_wisata aw, user us WHERE tt.email_admin=aw.email_admin AND tt.id=us.id AND date(tgl_booking) >= '$dari' AND date(tgl_booking) <= '$sampai'")->result();

		$data['title'] = 'Print Laporan Transaksi';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/print_laporan');;

	}

	public function _rules()
	{
		$this->form_validation->set_rules('dari', 'Dari Tanggal','required');
		$this->form_validation->set_rules('sampai', 'Sampai Tanggal','required');
	}

}