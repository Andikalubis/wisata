<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisatawan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Wisatawan_model');
	}

	public function home()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Home';
        $this->load->view('wisatawan/templates/wisatawan_header', $data);
        $this->load->view('wisatawan/templates/wisatawan_bar', $data);
		$this->load->view('wisatawan/home');
		$this->load->view('wisatawan/templates/wisatawan_footer');
	}

	public function wisata()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->userdata('email_admin')])->row_array();
		$data['admin_wisata'] = $this->Wisatawan_model->get_data('admin_wisata')->result();

		$data['title'] = 'Wisata Perkemahan';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar', $data);
		$this->load->view('wisatawan/wisata', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
	}

	public function kategori()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori_wisata'] = $this->Wisatawan_model->get_data('kategori_wisata')->result();
		$data['admin_wisata'] = $this->Wisatawan_model->get_data('admin_wisata')->result();

		$data['title'] = 'Kategori Wisata';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar', $data);
		$this->load->view('wisatawan/kategori', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
	}

	
	public function detail_wisata($id)
	{
		$data['outdoor'] = $this->Wisatawan_model->get_data('outdoor')->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['detailwisata'] = $this->Wisatawan_model->ambil_id_wisata($id);
		$data['outdoor'] = $this->Wisatawan_model->ambil_id_produk($id);

		$data['title'] = 'Detail Wisata';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/detailwisata', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');

	}

	public function profil ()
	{
		$data['title'] = 'Profil Saya';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Nama', 'required');
		
		if ($this->form_validation->run() == false) {

		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar', $data);
		$this->load->view('wisatawan/profil', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');

		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

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
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah</div>');
			redirect('wisatawan/profil');
		}

	}

	public function password ()
	{
		$data['title'] = 'Profil Saya';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Password saat ini', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password baru', 'required|trim|min_length[4]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Konfirmasi password baru', 'required|trim|min_length[4]|matches[new_password1]');

		if ($this->form_validation->run() == false) {

		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar', $data);
		$this->load->view('wisatawan/profil', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');

		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password saat ini salah!</div>');
			redirect('wisatawan/profil');
			} else {
				if($current_password == $new_password) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password saat ini!</div>');
				redirect('wisatawan/profil');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
					redirect('wisatawan/profil');
				}
			}
		}
	}

	public function pesanan()
	{
		if ($this->session->userdata('email'))
		{
			$email = $this->session->userdata('email');
            $data['pesanan'] = $this->AdminWisata_model->get_transaksi_tiket($email);
            $data['sewa'] = $this->AdminWisata_model->get_transaksi_outdoor($email);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Pesanan Saya';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/pesanan', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
		}

	}

	public function tambah_tiket($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['detail'] = $this->Wisatawan_model->ambil_id_wisata($id);

		$data['title'] = 'Order Tiket';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/tambah_tiket', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
	}

	public function tambah_tiket_aksi()
	{
		$id                    	= $this->AdminWisata_model->get_id();
		$email                   = $this->AdminWisata_model->get_email();
		$id_wisata 			= $this->input->post('id_wisata');
		$email_admin             = $this->input->post('email_admin');
		$nama_wisata 			= $this->input->post('nama_wisata');
		$tgl_order 			= $this->input->post('tgl_order');
		$tgl_booking 			= $this->input->post('tgl_booking');
		$waktu 				= $this->input->post('waktu');
		$harga_tiket			= $this->input->post('harga_tiket');
		$jumlah_tiket 			= $this->input->post('jumlah_tiket');
		$no_hp 				= $this->input->post('no_hp');
		$alamat_wisatawan 		= $this->input->post('alamat_wisatawan');
		$rekening 			= $this->input->post('rekening');

		$data = array(
			'id' 			=> $id,
			'email' 			=> $email,
			'id_wisata'		=> $id_wisata,
			'email_admin'		=> $email_admin,
			'nama_wisata'		=> $nama_wisata,
			'tgl_order' 		=> $tgl_order,
			'tgl_booking' 		=> $tgl_booking,
			'waktu' 			=> $waktu,
			'harga_tiket'		=> $harga_tiket,
			'jumlah_tiket'		=> $jumlah_tiket,
			'no_hp'			=> $no_hp,
			'alamat_wisatawan'	=> $alamat_wisatawan,
			'rekening'		=> $rekening,
		);

		$this->AdminWisata_model->insert_data($data, 'transaksi_tiket');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Transaksi berhasil, Silahkan Lakukan Pembayaran!</div>');
			redirect('wisatawan/pesanan');

	}

	public function pembayaran_tiket($id)
	{
		if ($this->session->userdata('email'))
		{
			$email = $this->session->userdata('email');
            $data['pesanan'] = $this->AdminWisata_model->get_transaksi_tiket($email);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Pembayaran Tiket';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/pembayaran_tiket', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
		}
	}

	public function pembayaran_tiket_aksi()
	{
		$id 				= $this->input->post('id_tiket');
		$tgl_selesai 		= $this->input->post('tgl_selesai');
		$bukti_transfer		= $_FILES['bukti_transfer']['name'];
			if($bukti_transfer){
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('bukti_transfer')){
					$bukti_transfer=$this->upload->data('file_name');
					$this->db->set('bukti_transfer', $bukti_transfer);
				}else{
					echo $this->upload->display_error();
				}
			}

	$data = array(
		'tgl_selesai' 	=> $tgl_selesai,
		'bukti_transfer' 	=> $bukti_transfer,
	);

	$where = array(
		'id_tiket'	=> $id
	);

	$this->AdminWisata_model->update_data('transaksi_tiket', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Bukti pembayaran anda berhasil di upload!</h5></div>');
			redirect('wisatawan/pesanan');
	}

	public function cetak_invoice($id)
	{
		$data['pesanan'] = $this->Wisatawan_model->ambil_id_tiket($id);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Cetak Invoice';
		$this->load->view('wisatawan/cetak_invoice', $data);
		
		
	}

	public function add_cart()
	{
		$id                    	= $this->AdminWisata_model->get_id();
		$email                  = $this->AdminWisata_model->get_email();
		$id_wisata 				= $this->input->post('id_wisata');
		$email_admin            = $this->input->post('email_admin');
		$id_produk 				= $this->input->post('id_produk');
		$nama_produk 			= $this->input->post('nama_produk');
		$deskripsi_produk 		= $this->input->post('deskripsi_produk');
		$harga_sewa 			= $this->input->post('harga_sewa');
		$rekening 				= $this->input->post('rekening');

		$data = array(
			'id' 				=> $id,
			'email' 			=> $email,
			'id_wisata'			=> $id_wisata,
			'email_admin'		=> $email_admin,
			'id_produk'			=> $id_produk,
			'nama_produk' 		=> $nama_produk,
			'deskripsi_produk' 	=> $deskripsi_produk,
			'harga_sewa' 		=> $harga_sewa,
			'rekening' 			=> $rekening

		);

		$this->AdminWisata_model->insert_data($data, 'transaksi_outdoor');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Berhasil Tambah Keranjang, Silahkan Checkout!</h5></div>');
			redirect('wisatawan/cart');
	}

	public function cart()
	{
		if ($this->session->userdata('email'))
		{
			$email = $this->session->userdata('email');
            $data['cart'] = $this->AdminWisata_model->get_transaksi_outdoor($email);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'keranjang Pesanan';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/cart');
		$this->load->view('wisatawan/templates/wisatawan_footer');
		}
	}

	public function delete_cart($id)
	{
		$where = array('id_sewa' => $id);
		$this->AdminWisata_model->delete_data($where, 'transaksi_outdoor');
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Data berhasil dihapus!</h5></div>');
			redirect('wisatawan/cart');
	}

	public function tambah_sewa($id)
	{
		$data['detail'] = $this->Wisatawan_model->ambil_id_sewa($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Sewa Outdoor';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/tambah_sewa', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
		
		
	}

	public function tambah_sewa_aksi()
	{
		$id 				= $this->input->post('id_sewa');
		$tgl_order_sewa 	= $this->input->post('tgl_order_sewa');
		$tgl_sewa 		= $this->input->post('tgl_sewa');
		$tgl_kembali		= $this->input->post('tgl_kembali');
		$no_tlp 			= $this->input->post('no_tlp');
		$alamat_sewa 		= $this->input->post('alamat_sewa');
		$rekening 		= $this->input->post('rekening');

		$data = array(
			'tgl_order_sewa' 	=> $tgl_order_sewa,
			'tgl_sewa' 		=> $tgl_sewa,
			'tgl_kembali' 		=> $tgl_kembali,
			'no_tlp' 			=> $no_tlp,
			'alamat_sewa' 		=> $alamat_sewa,
			'rekening' 		=> $rekening,
		);

		$where = array(
		'id_sewa'	=> $id
		);

		$this->AdminWisata_model->update_data('transaksi_outdoor', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Transaksi Sewa Berhasil, Silahkan Lakukan Pembayaran!</div>');
			redirect('wisatawan/pesanan');

	}

	public function pembayaran_sewa($id)
	{		
		if ($this->session->userdata('email'))
		{
			$email = $this->session->userdata('email');
            $data['pesanan'] = $this->AdminWisata_model->get_transaksi_outdoor($email);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Pembayaran Tiket';
		$this->load->view('wisatawan/templates/wisatawan_header', $data);
		$this->load->view('wisatawan/templates/wisatawan_bar');
		$this->load->view('wisatawan/pembayaran_sewa', $data);
		$this->load->view('wisatawan/templates/wisatawan_footer');
		}
	}

	public function pembayaran_sewa_aksi()
	{
		$id 			= $this->input->post('id_sewa');
		$bukti_sewa		= $_FILES['bukti_sewa']['name'];
			if($bukti_sewa){
				$config ['upload_path']		= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('bukti_sewa')){
					$bukti_sewa=$this->upload->data('file_name');
					$this->db->set('bukti_sewa', $bukti_sewa);
				}else{
					echo $this->upload->display_error();
				}
			}

	$data = array(
		'bukti_sewa' 	=> $bukti_sewa,
	);

	$where = array(
		'id_sewa'	=> $id
	);

	$this->AdminWisata_model->update_data('transaksi_outdoor', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Bukti pembayaran anda berhasil di upload!</h5></div>');
			redirect('wisatawan/pesanan');
	}

	public function cetak_invoice_sewa($id)
	{
		$data['pesanan'] = $this->Wisatawan_model->ambil_id_sewa($id);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Cetak Invoice';
		$this->load->view('wisatawan/cetak_invoice_sewa', $data);
		
		
	}

}