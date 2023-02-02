<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
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
        $data['title'] = "Data periode";

        $data['tbl_periode'] = $this->PeriodeModel->get_all_periode();
        $data['jumlah'] = $this->db->count_all('tbl_periode');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/periode/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function tambah()
    {
        $this->load->view('periode/form_tambah');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nama_periode', 'Nama periode', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('periode/');
        } else {
            $data = array(
                'nama_periode' => $this->input->post('nama_periode'),
                'status' => $this->input->post('status'),
            );
            $this->PeriodeModel->insert_periode($data);
            $this->session->set_flashdata('alert', 'Data periode berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('periode');
        }
    }

    public function lihat($id)
    {
        $data['tbl_periode'] = $this->PeriodeModel->get_periode($id);
        $this->load->view('periode/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_periode'] = $this->PeriodeModel->get_periode($id);
        $this->load->view('backend/akademik/periode/edit', $data);
    }

    public function delete($id)
    {
        $this->PeriodeModel->delete_periode($id);
        $this->session->set_flashdata('alert', 'Data periode berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('periode');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
    $this->form_validation->set_rules('nama_periode', 'nama_periode', 'required');
    $this->form_validation->set_rules('status', 'status', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_periode'] = $this->PeriodeModel->get_periode($id);
        $this->load->view('backend/akademik/periode/edit', $data);
    } else {
        $data = array(
            'id_periode' => $this->input->post('id_periode'),
            'nama_periode' => $this->input->post('nama_periode'),
            'status' => $this->input->post('status'),
        );

        $this->PeriodeModel->update_periode($id, $data);
        $this->session->set_flashdata('alert', 'Data periode berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('periode');
    }  
 }

}