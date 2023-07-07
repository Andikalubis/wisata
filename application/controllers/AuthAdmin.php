<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthAdmin extends CI_Controller 
{
 public function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation');
  $this->load->model('AdminWisata_model');
 }

 public function index()
 {
  $this->form_validation->set_rules('email_admin', 'Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required');

  if($this->form_validation->run() == false) {
       $data['title'] = 'Login Page';
       
       $this->load->view('auth/admin_login', $data);
      
  } else{

       $this->_loginadmin();
  }
      
 }

 private function _loginadmin()
 {
  $email_admin = $this->input->post('email_admin');
  $password = $this->input->post('password');

  $admin_wisata = $this->db->get_where('admin_wisata', ['email_admin' => $email_admin])->row_array();
  
  // jika usernya ada
  if($admin_wisata) {
       // jika usernya aktif
   if ($admin_wisata['is_active'] == 1) {
        // cek password
    if(password_verify($password, $admin_wisata['password'])) {
      $data = [
        'email_admin' => $admin_wisata['email_admin'],
        ];
        $this->session->set_userdata($data);
        redirect('adminwisata/dashboard');              
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
      redirect('authadmin');
      }

   } else {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your Email is not registered!</div>');
    redirect('authadmin');
   }
       
  } else {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated</div>');
        redirect('authadmin');
  }
 }

 public function registration()
 {
  $data['kategori_wisata'] = $this->AdminWisata_model->getdata();

  $this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'required|trim');
  $this->form_validation->set_rules('email_admin', 'Email', 'required|trim|valid_email|is_unique[admin_wisata.email_admin]',[
       'is_unique' => 'This email has already registered!'
  ]);
  $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
       'min_length' => 'Password too short!'
  ]);
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
  $this->form_validation->set_rules('alamat', 'Alamat', 'required');
  $this->form_validation->set_rules('jam_operasional', 'Jam Operasional', 'required');
  $this->form_validation->set_rules('harga_tiket', 'Harga Tiket', 'required');
  $this->form_validation->set_rules('akses_jalan', 'Akses Jalan', 'required');
  $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
  $this->form_validation->set_rules('kontak', 'Kontak', 'required');
  $this->form_validation->set_rules('maps', 'Link Google Maps', 'required|trim');
  $this->form_validation->set_rules('kode_kategori_wisata', 'Kategori', 'required|trim');
  $this->form_validation->set_rules('rekening', 'Rekening', 'required');

  if ($this->form_validation->run() == false) {
   $data['title'] = 'Registration';
   
   $this->load->view('auth/admin_register', $data);
       
       
  } else {
   $data = [
    'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
    'email_admin' => htmlspecialchars($this->input->post('email_admin', true)),
    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
    'alamat' => htmlspecialchars($this->input->post('alamat', true)),
    'jam_operasional' => htmlspecialchars($this->input->post('jam_operasional', true)),
    'harga_tiket' => htmlspecialchars($this->input->post('harga_tiket', true)),
    'akses_jalan' => htmlspecialchars($this->input->post('akses_jalan', true)),
    'fasilitas' => htmlspecialchars($this->input->post('fasilitas', true)),
    'kontak' => htmlspecialchars($this->input->post('kontak', true)),
    'maps' => htmlspecialchars($this->input->post('maps', true)),
    'kode_kategori_wisata' => htmlspecialchars($this->input->post('kode_kategori_wisata', true)),
    'image' => 'wisata.jpg',
    'rekening' => htmlspecialchars($this->input->post('rekening', true)),
    'is_active' => 1,
    'date_created' => time()
   ];

   $this->db->insert('admin_wisata', $data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account has been created. Please Login</div>');
   redirect('authadmin');
  }

 }

 public function logout()
 {
      $this->session->unset_userdata('email_admin');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
           redirect('authadmin');
 }

}