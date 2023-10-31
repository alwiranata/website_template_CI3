<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_model extends CI_Model
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

    public function updateTampilan($id)
    {
        $title = $this->input->post('title');
        $boostrap = $this->input->post('boostrap');

        $data = [

            'title' => $title,
            'boostrap' => $boostrap,


        ];

        $this->db->where('id', $id);
        $this->db->update('home', $data);
    }
}
