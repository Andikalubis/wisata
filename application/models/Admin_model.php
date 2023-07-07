<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
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


   public function ambil_id_content($id)
    {
        $hasil = $this->db->where('id_content', $id)->get('content');
        if($hasil->num_rows() > 0)
        {
            return $hasil->result();
        }else{
                return false;
            }
    }

    public function get_content($level) {
        $this->db->where('level', $level);
        $query = $this->db->get('content');
        return $query->result();
    }

}