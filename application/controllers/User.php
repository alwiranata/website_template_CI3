<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'um');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function user()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'User';
        $data['role'] = $this->um->getAllUser();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_navbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function editUser($id)
    {
        $this->form_validation->set_rules('id', 'ID', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'User';
            $data['role'] = $this->um->getAllUser();
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_navbar', $data);
            $this->load->view('admin/user', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $this->um->updateUser($id);

            //notif save
            $this->session->set_flashdata(
                'menu_message',
                '<div class="alert alert-success" role="alert">
                 Data Berhasil Diperbarui!
            </div>'
            );

            //arahkan ke halaman
            redirect('user/user');
        }
    }

    public function deleteUser($id)
    {
        $this->um->hapusUser($id);

        $this->session->set_flashdata(
            'User_message',
            '<div class="alert alert-danger" role="alert">
             Data Berhasil Dihapus!
            </div>'
        );
        //arahkan ke halaman
        redirect('user/user');
    }
}
