<?php
class Transaksi_outdoor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('AdminWisata_model');     
    }  

    public function transaksi($id)
    {
        $data['admin_wisata'] = $this->db->get_where('admin_wisata', ['email_admin' => $this->session->
        userdata('email_admin')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->
        userdata('email')])->row_array();      
        $data['outdoor'] = $this->AdminWisata_model->get_produk_by_id($id);
        //$data['admin_wisata'] = $this->AdminWisata_model->get_wisata($id);

        $data['title'] = 'Pemesanan';
        $this->load->view('wisatawan/templates/wisatawan_header', $data);
        $this->load->view('wisatawan/templates/wisatawan_bar', $data);
        $this->load->view('wisatawan/sewa', $data);
        $this->load->view('wisatawan/templates/wisatawan_footer');

    }

    public function submit()
    {
        $this->load->model('AdminWisata_model');
        $id_wisata              = $this->AdminWisata_model->get_id_wisata();
        $id                     = $this->AdminWisata_model->get_id();
        $nama_produk            = $this->input->post('nama_produk');
        $harga_sewa             = $this->input->post('harga_sewa');
        $tlp                    = $this->input->post('tlp');
        $lama_sewa              = $this->input->post('lama_sewa');
        $total_harga            = $harga_sewa * $lama_sewa;

        $data = array(
            'id_wisata'     => $id_wisata,
            'id'            => $id,
            'nama_produk'   => $nama_produk,
            'harga_sewa'    => $harga_sewa,
            'tlp'           => $tlp,
            'lama_sewa'     => $lama_sewa,
            'total'         => $total_harga
        );

        $this->AdminWisata_model->insert($data);

        redirect('keranjang');
    }

}