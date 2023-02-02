<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgramKategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProgramKategoriModel');
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
        $data['title'] = "Data Program Kategori";

        $data['tbl_program_kategori'] = $this->ProgramKategoriModel->get_all_program_kategori();
        $data['jumlah'] = $this->db->count_all('tbl_program_kategori');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/kategori_program/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }
    public function simpan()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama program_kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('programkategori/');
        } else {
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
            );
            $this->ProgramKategoriModel->insert_program_kategori($data);
            $this->session->set_flashdata('alert', 'Data program kategori berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('programkategori');
        }
    }

    public function lihat($id)
    {
        $data['tbl_program_kategori'] = $this->ProgramKategoriModel->get_program_kategori($id);
        $this->load->view('programkategori/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_program_kategori'] = $this->ProgramKategoriModel->get_program_kategori($id);
        $this->load->view('backend/akademik/program_kategori/edit', $data);
    }

    public function delete($id)
    {
        $this->ProgramKategoriModel->delete_program_kategori($id);
        $this->session->set_flashdata('alert', 'Data program kategori berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('programkategori');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
    $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_program_kategori'] = $this->ProgramKategoriModel->get_program_kategori($id);
        $this->load->view('backend/akademik/program_kategori/edit', $data);
    } else {
        $data = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori'),
        );

        $this->ProgramKategoriModel->update_program_kategori($id, $data);
        $this->session->set_flashdata('alert', 'Data program_kategori berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('programkategori');
    }  
 }

}