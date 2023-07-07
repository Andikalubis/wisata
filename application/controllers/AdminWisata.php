<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminWisata extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
		$this->load->model('AdminWisata_model');
		
	}


	public function dashboard()
	{
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$data['title'] = 'Dashboard';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/templates/admin_footer');
	}

	public function profilwisata()
	{
		$data['title'] = 'Profil Wisata';
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => 
		$this->session->userdata('email_admin')])->row_array();
		
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/profilwisata', $data);
		$this->load->view('admin/templates/admin_footer');
	}

	public function edit_profil()
	{
		$data['title'] = 'Edit Profil Wisata';
		$data['kategori_wisata'] = $this->AdminWisata_model->getdata();
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => 
		$this->session->userdata('email_admin')])->row_array();

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == false) {
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/edit_profil', $data);
		$this->load->view('admin/templates/admin_footer');

		} else {
			$nama_wisata = $this->input->post('nama_wisata');
			$deskripsi = $this->input->post('deskripsi');
			$alamat = $this->input->post('alamat');
			$jam_operasional = $this->input->post('jam_operasional');
			$harga_tiket = $this->input->post('harga_tiket');
			$akses_jalan = $this->input->post('akses_jalan');
			$fasilitas = $this->input->post('fasilitas');
			$kontak = $this->input->post('kontak');
			$kode_kategori_wisata = $this->input->post('kode_kategori_wisata');
			$maps = $this->input->post('maps');
			$email_admin = $this->input->post('email_admin');

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

			$this->db->set('nama_wisata', $nama_wisata);
			$this->db->set('deskripsi', $deskripsi);
			$this->db->set('alamat', $alamat);
			$this->db->set('jam_operasional',$jam_operasional);
			$this->db->set('harga_tiket', $harga_tiket);
			$this->db->set('akses_jalan', $akses_jalan);
			$this->db->set('fasilitas', $fasilitas);
			$this->db->set('kontak', $kontak);
			$this->db->set('kode_kategori_wisata', $kode_kategori_wisata);
			$this->db->set('maps', $maps);
			$this->db->where('email_admin', $email_admin);
			$this->db->update('admin_wisata');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated</div>');
			redirect('adminwisata/edit_profil');
		}
	}

	public function edit_password ()
	{
		$data['title'] = 'Edit Profil Wisata';
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$this->form_validation->set_rules('current_password', 'Password saat ini', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password baru', 'required|trim|min_length[4]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Konfirmasi password baru', 'required|trim|min_length[4]|matches[new_password1]');

		if ($this->form_validation->run() == false) {

		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/edit_profil', $data);
		$this->load->view('admin/templates/admin_footer');

		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['admin_wisata']['password'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password saat ini salah!</div>');
			redirect('adminwisata/edit_profil');
			} else {
				if($current_password == $new_password) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password saat ini!</div>');
				redirect('adminwisata/edit_profil');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email_admin', $this->session->userdata('email_admin'));
					$this->db->update('admin_wisata');

					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
					redirect('adminwisata/edit_profil');
				}
			}
		}
	}


	public function dataproduk()
	{
		if ($this->session->userdata('email_admin')) {
            // get user id from session
            $email_admin = $this->session->userdata('email_admin');
            $data['outdoor'] = $this->AdminWisata_model->get_produk($email_admin);
		
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
		$data['kategori_outdoor'] = $this->AdminWisata_model->get_data('kategori_outdoor')->result();

		$data['title'] = 'Data Produk Outdoor';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/outdoor', $data);
		$this->load->view('admin/templates/admin_footer');
		}
	}


	public function tambah_produk()
	{
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
		$data['kategori_outdoor'] = $this->AdminWisata_model->get_data('kategori_outdoor')->result();
		
		$data['title'] = 'Tambah Data Produk Outdoor';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/tambah_produk', $data);
		$this->load->view('admin/templates/admin_footer');
	}

	public function tambah_produk_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_produk();
		
		}else{
			$id_wisata 				= $this->AdminWisata_model->get_id_wisata();
			$email_admin 			= $this->AdminWisata_model->get_email_admin();
			$rekening	 			= $this->AdminWisata_model->get_rekening	();
			$kode_kategori			= $this->input->post('kode_kategori');
			$nama_produk			= $this->input->post('nama_produk');
			$deskripsi_produk		= $this->input->post('deskripsi_produk');
			$harga_sewa				= $this->input->post('harga_sewa');
			$status					= $this->input->post('status');
			$gambar					= $_FILES['gambar']['name'];
			if($gambar=''){}else{
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Produk Gagal di Upload!";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'id_wisata'				=> $id_wisata,
				'email_admin'			=> $email_admin,
				'rekening'				=> $rekening,
				'kode_kategori'			=> $kode_kategori,
				'nama_produk'			=> $nama_produk,
				'deskripsi_produk'		=> $deskripsi_produk,
				'harga_sewa'			=> $harga_sewa,
				'status'				=> $status,
				'gambar'				=> $gambar

			);

			$this->AdminWisata_model->insert_data($data,'outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil ditambahkan!</h5></div>');
			redirect('adminwisata/dataproduk');

		}
	}

	public function update_produk($id)
	{
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
		$where = array('id_produk' => $id);
		$data['outdoor'] = $this->db->query("SELECT * FROM outdoor od, kategori_outdoor ktg WHERE 
			od.kode_kategori=ktg.kode_kategori AND od.id_produk='$id'")->result();
		$data['kategori_outdoor'] = $this->AdminWisata_model->get_data('kategori_outdoor')->result();

		$data['title'] = 'Edit Data Produk Outdoor';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/update_produk', $data);
		$this->load->view('admin/templates/admin_footer');

	}

	public function update_produk_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE)
		{
			$this->update_produk();
		}else{
			$id 					= $this->input->post('id_produk');
			$id_wisata 				= $this->AdminWisata_model->get_id_wisata();
			$email_admin 			= $this->AdminWisata_model->get_email_admin();
			$kode_kategori			= $this->input->post('kode_kategori');
			$nama_produk			= $this->input->post('nama_produk');
			$deskripsi_produk		= $this->input->post('deskripsi_produk');
			$harga_sewa				= $this->input->post('harga_sewa');
			$status					= $this->input->post('status');
			$gambar					= $_FILES['gambar']['name'];
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
				'id_wisata'				=> $id_wisata,
				'email_admin'			=> $email_admin,
				'kode_kategori'			=> $kode_kategori,
				'nama_produk'			=> $nama_produk,
				'deskripsi_produk'		=> $deskripsi_produk,
				'harga_sewa'			=> $harga_sewa,
				'status'				=> $status,
			);

			$where = array(
				'id_produk' => $id
			);

			$this->AdminWisata_model->update_data('outdoor', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil diupdate!</h5></div>');
			redirect('adminwisata/dataproduk');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_kategori', 'Kode Kategori','required');
		$this->form_validation->set_rules('nama_produk', 'Nama Produk','required');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk','required');
		$this->form_validation->set_rules('harga_sewa', 'Harga Sewa','required');
		$this->form_validation->set_rules('status', 'Status','required');
	}

	public function delete_produk($id)
	{
		$where = array('id_produk' => $id);
		$this->AdminWisata_model->delete_data($where, 'outdoor');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('adminwisata/dataproduk');
	}

	public function tiket_wisata()
	{
		if ($this->session->userdata('email_admin')) {
            // get user id from session
            $email_admin = $this->session->userdata('email_admin');
            $data['pesanan'] = $this->AdminWisata_model->get_transaksi_tiket_wisata($email_admin);
		
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$data['title'] = 'Data Pembelian Tiket';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/tiket_wisata', $data);
		$this->load->view('admin/templates/admin_footer');
		}
	}

	public function pembayaran_tiket($id)
	{
		$where = array('id_tiket' => $id);
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi_tiket WHERE id_tiket='$id'")->result();
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$data['title'] = 'Konfirmasi Pembayaran';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/konfirmasi_pembayaran', $data);
		$this->load->view('admin/templates/admin_footer');
	}

	public function cek_pembayaran()
	{
		$id 				= $this->input->post('id_tiket');
		$status_pembayaran	= $this->input->post('status_pembayaran');

		$data = array(
			'status_pembayaran'	=> $status_pembayaran,
		);

		$where = array(
			'id_tiket'	=> $id
		);

		$this->AdminWisata_model->update_data('transaksi_tiket', $data,$where);
		redirect('adminwisata/tiket_wisata');
	}

	public function download_pembayaran($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->AdminWisata_model->downloadPembayaran($id);
		$file = './assets/upload/'.$filePembayaran['bukti_transfer'];
		force_download($file, NULL);
	}

	public function sewa_outdoor()
	{
		if ($this->session->userdata('email_admin')) {
            // get user id from session
            $email_admin = $this->session->userdata('email_admin');
            $data['pesanan'] = $this->AdminWisata_model->get_sewa_outdoor($email_admin);
		
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$data['title'] = 'Data Pembelian Tiket';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/sewa_outdoor', $data);
		$this->load->view('admin/templates/admin_footer');
		}
	}

	public function pembayaran_sewa($id)
	{
		$where = array('id_sewa' => $id);
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi_outdoor WHERE id_sewa='$id'")->result();
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$data['title'] = 'Konfirmasi Pembayaran';
		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_bar', $data);
		$this->load->view('admin/konfirmasi_sewa', $data);
		$this->load->view('admin/templates/admin_footer');
	}

	public function cek_sewa()
	{
		$id 				= $this->input->post('id_sewa');
		$status_bayar		= $this->input->post('status_bayar');

		$data = array(
			'status_bayar'	=> $status_bayar,
		);

		$where = array(
			'id_sewa'	=> $id
		);

		$this->AdminWisata_model->update_data('transaksi_outdoor', $data,$where);
		redirect('adminwisata/sewa_outdoor');
	}

	public function download_sewa($id)
	{
		$this->load->helper('download');
		$fileSewa = $this->AdminWisata_model->downloadSewa($id);
		$file = './assets/upload/'.$fileSewa['bukti_sewa'];
		force_download($file, NULL);
	}

}