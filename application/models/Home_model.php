<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getAllUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('home')->result_array();
    }
    public function getDataUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('home')->row_array();
    }
}
