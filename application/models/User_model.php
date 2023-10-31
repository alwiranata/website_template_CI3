<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getAllUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('user')->result_array();
    }
    public function getDataUser()
    {
        //ambil seluruh data siswa
        return $this->db->get('user')->row_array();
    }

    public function updateUser($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role_id = $this->input->post('role_id');
        $pw = password_hash($password, PASSWORD_DEFAULT);

        $data = [

            'name' => $name,
            'email' => $email,
            'password' => $pw,
            'role_id' => $role_id,

        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function hapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}
