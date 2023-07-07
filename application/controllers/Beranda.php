<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{

		$data['title'] = 'Beranda';
        $this->load->view('Beranda/templates/Beranda_header', $data);
        $this->load->view('Beranda/templates/Beranda_bar', $data);
		$this->load->view('Beranda/beranda',$data);
		$this->load->view('Beranda/templates/Beranda_footer');
	}

}