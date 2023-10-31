<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Registrasi_model', 'rm');
    }
    public function index()
    {
        //Validasi Data
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);

            $this->load->view('auth/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();


        //jika user ada
        if ($user) {

            //jika user aktif
            if ($user['is_active'] == 1) {

                //jika password sesuai
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']

                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 'admin') {
                        redirect('admin');
                    } else if ($user['role_id'] == 'user') {
                        redirect('home');
                    } else {
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata(
                        'auth_message',
                        '<div class="alert alert-danger" role="alert">
                         Password Tidak Sesuai
                        </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'auth_message',
                    '<div class="alert alert-danger" role="alert">
                     Email Tidak Aktif
                    </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'auth_message',
                '<div class="alert alert-danger" role="alert">
                 Email Belum Terdaftar
                </div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');

        redirect('auth');
    }

    public function registrasion()
    {
        //validasi data
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registrasi';
            $this->load->view('templates/header',);
            $this->load->view('auth/registrasion', $data);
        } else {

            //jika berhasil
            $this->rm->simpanUser();
            redirect('auth');
        }
    }
}
