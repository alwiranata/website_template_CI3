<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_model extends CI_Model
{
    public function getAllUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('web')->result_array();
    }
    public function getDataUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('web')->row_array();
    }
    public function hapusWeb($id)
    {
        $this->db->delete('web', ['id' => $id]);
    }
}
