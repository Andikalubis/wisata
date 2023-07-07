<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_wisata extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		is_logged_in_administrator();
	}
	public function index()
	{
        $data['administrator'] = $this->db->get_where('administrator', ['email' => 
        $this->session->userdata('email')])->row_array();
		$data['kategori_wisata'] = $this->AdminWisata_model->get_data('kategori_wisata')->result();

        $data['title'] = 'kategori Wisata';
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/kwisata');
		$this->load->view('administrator/templates/footer');
	}
    public function tambah_kategoriW()
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => 
        $this->session->userdata('email')])->row_array();
		$data['kategori_wisata'] = $this->AdminWisata_model->get_data('kategori_wisata')->result();
		
		$data['title'] = 'Tambah Data Kategori Wisata';
		$this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/kwisata_add',$data);
		$this->load->view('administrator/templates/footer');
	}

	public function tambah_kategoriW_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_kategoriW();
		
		}else{
			$kode_kategori_wisata	= $this->input->post('kode_kategori_wisata');
			$nama_kategori_wisata	= $this->input->post('nama_kategori_wisata');

			$data = array(
			'kode_kategori_wisata'			=> $kode_kategori_wisata,
			'nama_kategori_wisata'			=> $nama_kategori_wisata,
			);

			$this->AdminWisata_model->insert_data($data,'kategori_wisata');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil ditambahkan!</h5></div>');
			redirect('kategori_wisata');

		}
	}

	public function update_kategoriW($id_kategori_wisata)
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => 
        $this->session->userdata('email')])->row_array();
		$where = array('id_kategori_wisata' => $id_kategori_wisata);
		$data['kategori_wisata'] = $this->db->query("SELECT * FROM kategori_wisata k WHERE 
		 k.id_kategori_wisata='$id_kategori_wisata'")->result();
		
		
		$data['title'] = 'Tambah Data Kategori Wisata';
		$this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/kwisata_edit',$data);
		$this->load->view('administrator/templates/footer');

	}

	public function update_kategori_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->update_kategoriW();
		
		}else{
			$id_kategori_wisata				= $this->input->post('id_kategori_wisata');
			$kode_kategori_wisata			= $this->input->post('kode_kategori_wisata');
			$nama_kategori_Wisata			= $this->input->post('nama_kategori_wisata');

			$data = array(

				'id_kategori_wisata'			=> $id_kategori_wisata,
				'kode_kategori_wisata'			=> $kode_kategori_wisata,
				'nama_kategori_Wisata'			=> $nama_kategori_Wisata,

			);

			$where = array(
				'id_kategori_wisata' => $id_kategori_wisata
			);

			$this->AdminWisata_model->update_data('kategori_wisata', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil diupdate!</h5></div>');
			redirect('kategori_wisata');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_kategori_wisata', 'Kode Kategori','required');
		$this->form_validation->set_rules('nama_kategori_wisata', 'Nama Kategori','required');
	}

	public function delete_kategoriW($id)
	{
		$where = array('id_kategori_wisata' => $id);
		$this->AdminWisata_model->delete_data($where, 'kategori_wisata');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('kategori_wisata');
	}
}