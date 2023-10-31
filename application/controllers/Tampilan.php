<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tampilan_model', 'tm');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['home'] = $this->tm->getAllUser();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_navbar', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function editHome($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('boostrap', 'Boostrap', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Home';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['home'] = $this->tm->getAllUser();
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_navbar', $data);
            $this->load->view('admin/home', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $this->tm->updateTampilan($id);

            //notif save
            $this->session->set_flashdata(
                'tampilan_message',
                '<div class="alert alert-success" role="alert">
                 Data Berhasil Diperbarui!
            </div>'
            );

            //arahkan ke halaman
            redirect('tampilan/index');
        }
    }
}
