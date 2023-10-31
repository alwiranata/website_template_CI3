<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('user')->row_array();
    }
}
