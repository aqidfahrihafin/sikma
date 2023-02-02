<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProgramKategoriModel');
        $this->load->model('ProgramModel');
        $this->load->model('PeriodeModel');
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
        $data['title'] = "Data program";

        $data['tbl_program'] = $this->ProgramModel->get_all_program();
        $data['program_kategori'] = $this->ProgramKategoriModel->get_all_program_kategori();
        $data['periode'] = $this->PeriodeModel->get_all_periode();
        $data['tbl_periode'] = $this->PeriodeModel->get_active_periode();
        $data['jumlah'] = $this->db->count_all('tbl_program');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/program/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function tambah()
    {
        $this->load->view('program/form_tambah');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nama_program', 'Nama program', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('program/');
        } else {
            $data = array(
                'nama_program' => $this->input->post('nama_program'),
                'id_kategori' => $this->input->post('id_kategori'),
                'id_periode' => $this->input->post('id_periode'),
                'status' => $this->input->post('status'),
            );
            $this->ProgramModel->insert_program($data);
            $this->session->set_flashdata('alert', 'Data program berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('program');
        }
    }

    public function lihat($id)
    {
        $data['tbl_program'] = $this->ProgramModel->get_program($id);
        $this->load->view('program/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_program'] = $this->ProgramModel->get_program($id);
        $this->load->view('backend/akademik/program/edit', $data);
    }

    public function delete($id)
    {
        $this->ProgramModel->delete_program($id);
        $this->session->set_flashdata('alert', 'Data program berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('program');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_program', 'id_program', 'required');
    $this->form_validation->set_rules('nama_program', 'nama_program', 'required');
    $this->form_validation->set_rules('status', 'status', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_program'] = $this->ProgramModel->get_program($id);
        $this->load->view('backend/akademik/program/edit', $data);
    } else {
        $data = array(
            'id_program' => $this->input->post('id_program'),
            'nama_program' => $this->input->post('nama_program'),
            'status' => $this->input->post('status'),
        );

        $this->ProgramModel->update_program($id, $data);
        $this->session->set_flashdata('alert', 'Data program berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('program');
    }  
 }

}