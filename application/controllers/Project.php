<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model', 'pm');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['web'] = $this->pm->getDataWeb();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('project/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahProject()
    {

        $data['web'] = $this->pm->getDataWeb();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('html', 'html', 'required|trim');
        $this->form_validation->set_rules('css', 'css', 'required|trim');
        $this->form_validation->set_rules('js', 'js', 'required|trim');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('project/index', $data);
            $this->load->view('templates/footer');
        } else {

            $this->pm->simpanProject();



            $this->session->set_flashdata(
                'project_message',
                '<div class="alert alert-success" role="alert">
                 Data Berhasil Ditambah
                </div>'
            );
            redirect('project');
        }
    }
}
