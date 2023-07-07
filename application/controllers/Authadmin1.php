<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authadmin1 extends CI_Controller 
{
     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('AdminWisata_model');
     }

     public function index()
     {
          $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'trim|required');

          if($this->form_validation->run() == false) {
               $data['title'] = 'Login Page';
               
               $this->load->view('auth/login', $data);
              
          } else{

               $this->_loginadmin1();
          }
          
     }

     private function _loginadmin1()
     {
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          $administrator = $this->db->get_where('administrator', ['email' => $email])->row_array();
          
          // jika usernya ada
          if($administrator) {
               // jika usernya aktif

               if ($administrator['is_active'] == 1) {
                    // cek password
                    if(password_verify($password, $administrator['password'])) {
                         $data = [
                              'email' => $administrator['email'],
                         ];
                         $this->session->set_userdata($data);
                                                
                              redirect('admin/dashboard');   
                        
                    } else {
                          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('authadmin1');
                    }

               } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your Email is not registered!</div>');
                redirect('authadmin1');
               }          
          } 
     }

     public function regis()
     {
          $this->form_validation->set_rules('name', 'Name', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
               'is_unique' => 'This email has already registered!'
          ]);
           $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
               'matches' => 'Password dont match!',
               'min_length' => 'Password too short!'
           ]);
           $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


          if ($this->form_validation->run() == false) {
               $data['title'] = 'Registration';
               $this->load->view('auth/regis',$data);
               
          } else {
               $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    
                    'is_active' => 1,
                    'date_created' => time()
               ];

               $this->db->insert('administrator', $data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account has been created. Please Login</div>');
               redirect('authadmin1');
          }

     }


     public function logout()
     {
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
               redirect('authadmin1');
     }

}