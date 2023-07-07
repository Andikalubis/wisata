<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_outdoor extends CI_Controller 
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
	   $data['kategori_outdoor'] = $this->AdminWisata_model->get_data('kategori_outdoor')->result();

        $data['title'] = 'kategori Outdor';
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/koutdoor', $data);
		$this->load->view('administrator/templates/footer');
	}
    public function tambah_kategoriO()
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => 
          $this->session->userdata('email')])->row_array();
		$data['kategori_outdoor'] = $this->AdminWisata_model->get_data('kategori_outdoor')->result();
		
		$data['title'] = 'Tambah Data Kategori Outdoor';
		$this->load->view('administrator/templates/header', $data);
          $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/koutdoor_add',$data);
		$this->load->view('administrator/templates/footer');
	}

	public function tambah_kategoriO_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_kategoriO();
		
		}else{
			$kode_kategori	= $this->input->post('kode_kategori');
			$nama_kategori	= $this->input->post('nama_kategori');

			$data = array(
			'kode_kategori'			=> $kode_kategori,
			'nama_kategori'			=> $nama_kategori,
			);

			$this->AdminWisata_model->insert_data($data,'kategori_outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil ditambahkan!</h5></div>');
			redirect('kategori_outdoor');

		}
	}

	public function update_kategoriO($id_kategori)
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => 
        $this->session->userdata('email')])->row_array();
		$where = array('id_kategori' => $id_kategori);
		$data['kategori_outdoor'] = $this->db->query("SELECT * FROM kategori_outdoor ko WHERE 
		 ko.id_kategori='$id_kategori'")->result();
		
		
		$data['title'] = 'Tambah Data Kategori Outdoor';
		$this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/koutdoor_edit',$data);
		$this->load->view('administrator/templates/footer');

	}

	public function update_kategori_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->update_kategoriO();
		
		}else{
			$id_kategori			= $this->input->post('id_kategori');
			$kode_kategori			= $this->input->post('kode_kategori');
			$nama_kategori			= $this->input->post('nama_kategori');

			$data = array(

				'id_kategori'		    => $id_kategori,
				'kode_kategori'			=> $kode_kategori,
				'nama_kategori'			=> $nama_kategori,

			);

			$where = array(
				'id_kategori' => $id_kategori
			);

			$this->AdminWisata_model->update_data('kategori_outdoor', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil diupdate!</h5></div>');
			redirect('kategori_outdoor');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_kategori', 'Kode Kategori','required');
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori','required');
	}

	public function delete_kategoriO($id)
	{
		$where = array('id_kategori' => $id);
		$this->AdminWisata_model->delete_data($where, 'kategori_outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('kategori_outdoor');
	}
}