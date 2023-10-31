<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model', 'wm');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Web';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] = $this->wm->getAllUser();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_navbar', $data);
        $this->load->view('admin/web', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function deleteWeb($id)
    {
        $this->wm->hapusWeb($id);

        $this->session->set_flashdata(
            'web_message',
            '<div class="alert alert-danger" role="alert">
             Data Berhasil Dihapus!
            </div>'
        );
        //arahkan ke halaman
        redirect('web/index');
    }
}
