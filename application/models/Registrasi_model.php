<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi_model extends CI_Model
{
    public function getDataUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('user')->result_array();
    }

    public function simpanUser()
    {
        //data yang dikirim
        $nama = $this->input->post('name');
        $email = $this->input->post('email');


        //array
        $data = [

            'name' => $nama,
            'email' => $email,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 'user',
            'is_active' => '1',
            'date' => time()
        ];
        // var_dump($data);
        // die;
        $this->db->insert('user', $data);
    }
}
