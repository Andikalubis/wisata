<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminWisata_model extends CI_Model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function insert($data)
    {
        $this->db->insert('transaksi_outdoor', $data);
    }

    public function delete_cart_item($nama_produk)
    {
    	$this->db->where('nama_produk', $nama_produk);
    	$this->db->delete('transaksi_outdoor');
    }

	public function ambil_id_wisata($id)
	{
		$hasil = $this->db->where('id_wisata', $id)->get('admin_wisata');
		if($hasil->num_rows() > 0)
		{
			return $hasil->result();
		}else{
				return false;
			}
	}

    public function ambil_id_sewa($id)
    {
        $hasil = $this->db->where('id_produk', $id)->get('outdoor');
        if($hasil->num_rows() > 0)
        {
            return $hasil->result();
        }else{
                return false;
            }
    }

    public function downloadPembayaran($id)
    {
        $query = $this->db->get_where('transaksi_tiket',array('id_tiket' => $id));
        return $query->row_array();
    }

    public function downloadSewa($id)
    {
        $query = $this->db->get_where('transaksi_outdoor',array('id_sewa' => $id));
        return $query->row_array();
    }

	public function ambil_id_produk($id)
	{
		$hasil = $this->db->where('id_wisata', $id)->get('outdoor');
		if($hasil->num_rows() > 0)
		{
			return $hasil->result();
		}else{
				return false;
			}
	}

	public function getdata()
    {
        $query = $this->db->query("SELECT * FROM kategori_wisata 
        ORDER BY id_kategori_wisata ASC");
        
        return $query->result();
    }

    public function get_email()
    {
        $email = $this->session->userdata('email'); 
        $this->db->select('email');
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            $user = $query->row();
            return $user->email;
        } else {
            return false;
        }
    }


	public function get_email_admin() {
        $email_admin = $this->session->userdata('email_admin'); 
        $this->db->select('email_admin');
        $this->db->where('email_admin', $email_admin);
        $query = $this->db->get('admin_wisata');
        if ($query->num_rows() == 1) {
            $admin_wisata = $query->row();
            return $admin_wisata->email_admin;
        } else {
            return false;
        }
    }

	public function get_id_wisata() {
        $email_admin = $this->session->userdata('email_admin'); 
        $this->db->select('id_wisata');
        $this->db->where('email_admin', $email_admin);
        $query = $this->db->get('admin_wisata');
        if ($query->num_rows() == 1) {
            $admin_wisata = $query->row();
            return $admin_wisata->id_wisata;
        } else {
            return false;
        }
    }

    public function get_rekening() {
        $email_admin = $this->session->userdata('email_admin'); 
        $this->db->select('rekening');
        $this->db->where('email_admin', $email_admin);
        $query = $this->db->get('admin_wisata');
        if ($query->num_rows() == 1) {
            $admin_wisata = $query->row();
            return $admin_wisata->rekening;
        } else {
            return false;
        }
    }

    public function get_transaksi_tiket($email) {
        $this->db->select('*');
        $this->db->from('transaksi_tiket');
        $this->db->join('user', 'transaksi_tiket.email = user.email');
        $this->db->where('user.email', $email);
        $query = $this->db->get();
        return $query->result();
      }

       public function get_transaksi_sewa($email) {
        $this->db->select('*');
        $this->db->from('transaksi_outdoor');
        $this->db->join('user', 'transaksi_outdoor.email = user.email');
        $this->db->where('user.email', $email);
        $query = $this->db->get();
        return $query->result();
      }

       public function get_transaksi_tiket_wisata($email_admin) {
        $this->db->select('*');
        $this->db->from('transaksi_tiket');
        $this->db->join('admin_wisata', 'transaksi_tiket.email_admin = admin_wisata.email_admin');
        $this->db->where('admin_wisata.email_admin', $email_admin);
        $query = $this->db->get();
        return $query->result();
      }

      public function get_transaksi_outdoor($email) {
        $this->db->select('*');
        $this->db->from('transaksi_outdoor');
        $this->db->join('user', 'transaksi_outdoor.email = user.email');
        $this->db->where('user.email', $email);
        $query = $this->db->get();
        return $query->result();
      }

      public function get_sewa_outdoor($email_admin) {
        $this->db->select('*');
        $this->db->from('transaksi_outdoor');
        $this->db->join('admin_wisata', 'transaksi_outdoor.email_admin = admin_wisata.email_admin');
        $this->db->where('admin_wisata.email_admin', $email_admin);
        $query = $this->db->get();
        return $query->result();
      }

     public function get_produk($email_admin) {
        $this->db->select('*');
        $this->db->from('outdoor');
        $this->db->join('admin_wisata', 'outdoor.email_admin = admin_wisata.email_admin');
        $this->db->where('admin_wisata.email_admin', $email_admin);
        $query = $this->db->get();
        return $query->result();
      }

	public function getUser()
    {
        $this->db->select('id, name');
        $query = $this->db->get('user');
        return $query->result();
    }

    function get_produk_by_id($id) {
        $this->db->select('nama_produk, harga_sewa');
        $this->db->from('outdoor');
        $this->db->where('id_produk', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_id() {
        $email = $this->session->userdata('email'); 
        $this->db->select('id');
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            $user = $query->row();
            return $user->id;
        } else {
            return false;
        }
    }
}