<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_model extends CI_Model
{
    public function getDataWeb()
    {
        return $this->db->get('web')->result_array();
    }

    public function simpanProject()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $html = $this->input->post('html');
        $css = $this->input->post('css');
        $js = $this->input->post('js');

        // configurasi file upload
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['upload_path']   = './assets/img';
        $config['max_size']      = '2048';

        // load library
        $this->load->library('upload', $config);

        //upload
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('userfile')) {
            $data['error'] = $this->upload->display_errors();
            return FALSE;
        } else {

            $upload = $this->upload->data();

            // ambil data nama gambar
            $gambar = $upload['file_name'];

            $data = [
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'image'    => $gambar,
                'html'    => $html,
                'css'    => $css,
                'js'    => $js,
            ];
            //lakukan insert data ke table user 
        }

        $this->db->insert('web', $data);
    }
}
