<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdiModel');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
        if ($this->session->userdata('level') != 'Akademik') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            $this->session->set_flashdata('error_timeout', 4000);
            redirect('eror');
        }
    }

    public function index()
    {
        $data['title'] = "Data Perodi";

        $data['tbl_prodi'] = $this->ProdiModel->get_all_prodi();
        $data['jumlah'] = $this->db->count_all('tbl_prodi');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/prodi/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function tambah()
    {
        $this->load->view('prodi/form_tambah');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nama_prodi', 'Nama prodi', 'required');
        $this->form_validation->set_rules('fakultas', 'fakultas', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('prodi/');
        } else {
            $data = array(
                'nama_prodi' => $this->input->post('nama_prodi'),
                'fakultas' => $this->input->post('fakultas'),
            );
            $this->ProdiModel->insert_prodi($data);
            $this->session->set_flashdata('alert', 'Data prodi berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('prodi');
        }
    }

    public function lihat($id)
    {
        $data['tbl_prodi'] = $this->ProdiModel->get_prodi($id);
        $this->load->view('prodi/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_prodi'] = $this->ProdiModel->get_prodi($id);
        $this->load->view('backend/akademik/prodi/edit', $data);
    }

    public function delete($id)
    {
        $this->ProdiModel->delete_prodi($id);
        $this->session->set_flashdata('alert', 'Data prodi berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 3000);
        redirect('prodi');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_prodi', 'id_prodi', 'required');
    $this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required');
    $this->form_validation->set_rules('fakultas', 'fakultas', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_prodi'] = $this->ProdiModel->get_prodi($id);
        $this->load->view('backend/akademik/prodi/edit', $data);
    } else {
        $data = array(
            'id_prodi' => $this->input->post('id_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'fakultas' => $this->input->post('fakultas'),
        );

        $this->ProdiModel->update_prodi($id, $data);
        $this->session->set_flashdata('alert', 'Data prodi berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 3000);
        redirect('prodi');
    }  
 }

}