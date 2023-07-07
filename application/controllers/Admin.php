<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Admin_model');
	}

	public function dashboard()
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Dashboard';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/dashboard');
		$this->load->view('administrator/templates/footer');
	}

	public function content()
	{
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		$data['content'] = $this->Admin_model->get_data('content')->result();

		$data['title'] = 'Content';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/content', $data);
		$this->load->view('administrator/templates/footer');
	}

	public function update_content($id)
	{
		$data['administrator'] = $this->db->get_where('administrator', ['email' => 
        $this->session->userdata('email')])->row_array();
		$data['content'] = $this->Admin_model->get_data('content')->result();
		$data['content'] = $this->Admin_model->ambil_id_content($id);
		
		$data['title'] = 'Update Data content';
		$this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/content_edit', $data);
		$this->load->view('administrator/templates/footer');

	}

	public function update_content_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE)
		{
			$this->update_content();
		}else{
			$id 				= $this->input->post('id_content');
			$deskripsi			= $this->input->post('deskripsi');
			$gambar				= $_FILES['gambar']['name'];
			if($gambar){
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$gambar=$this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo $this->upload->display_error();
				}
			}

			$data = array(
				'deskripsi'		=> $deskripsi,
			);

			$where = array(
				'id_content' => $id
			);

			$this->Admin_model->update_data('content', $data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil diupdate!</h5></div>');
			redirect('admin/content');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('deskripsi', 'Deskripsi','required');
	}

	//control untuk Profil Administrator
	public function profil()
	{
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Dashboard';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/profil', $data);
		$this->load->view('administrator/templates/footer');
	}
	public function edit_profil()
	{
		$data['title'] = 'Edit Profil ';
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('name', 'Nama', 'required');
		if ($this->form_validation->run() == false) {
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/profil', $data);
		$this->load->view('administrator/templates/footer');

		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$image = $this->input->post('image');

			//cek upload gambar
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types']	= 'gif|jpg|png|jpeg';
				$config['max_size']			= '5000';
				$config['upload_path']		= './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->set('email', $email);
			$this->db->set('password',$password);
			$this->db->set('image',$image);
			$this->db->update('administrator');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated</div>');
			redirect('admin/edit_profil');
		}
	}

	
	

	//control untuk produk

	public function produk()
	{
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		$data['outdoor'] = $this->Admin_model->get_data('outdoor')->result();

		$data['title'] = 'Data Produk Outdoor';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/produk', $data);
		$this->load->view('administrator/templates/footer');
		
	}

	public function delete_produk($id)
	{
		$where = array('id_produk' => $id);
		$this->Admin_model->delete_data($where, 'outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('admin/produk');
	}


	//control untuk wisata

	public function wisata()
	{
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		$data['admin_wisata'] = $this->Admin_model->get_data('admin_wisata')->result();

		$data['title'] = 'Data Wisata';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/wisata', $data);
		$this->load->view('administrator/templates/footer');
		
	}

	public function delete_wisata($id)
	{
		$where = array('id_wisata' => $id);
		$this->Admin_model->delete_data($where, 'admin_wisata');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('admin/wisata');
	}
	public function detail_wisata($id)
	{
		$data['outdoor'] = $this->Admin_model->get_data('outdoor')->result();
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		$data['detailwisata'] = $this->Admin_model->ambil_id_wisata($id);
		$data['outdoor'] = $this->Admin_model->ambil_id_produk($id);

		$data['title'] = 'Detail Profil Wisata';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/detail_wisata', $data);
		$this->load->view('administrator/templates/footer');
	}

	//control untuk wisatawan

	public function wisatawan()
	{
		$data['administrator'] = $this->db->get_where('administrator', 
		['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $this->Admin_model->get_data('user')->result();

		$data['title'] = 'Data Wisatawan';
		$this->load->view('administrator/templates/header', $data);
		$this->load->view('administrator/templates/bar', $data);
		$this->load->view('administrator/wisatawan', $data);
		$this->load->view('administrator/templates/footer');
		
	}
	public function delete_wisatawan($id)
	{
		$where = array('id' => $id);
		$this->Admin_model->delete_data($where, 'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('admin/wisatawan');
	}

}