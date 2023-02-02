<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->model('AlamatModel');
        $this->load->model('M_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {
        $data['title'] = "Data Berkas";

        $data['tbl_instansi'] = $this->M_data->get_data('tbl_instansi')->result();

        $this->db->where('fakultas', 'teknik');
        $data['pending'] = $this->db->count_all_results('tbl_prodi');
        $this->db->where('fakultas', 'mipa');
        $data['diterima'] = $this->db->count_all_results('tbl_prodi');
        $this->db->where('fakultas', 'mipa');
        $data['ditolak'] = $this->db->count_all_results('tbl_prodi');
        
      
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_all_mahasiswa();
        $data['jumlah'] = $this->db->count_all('tbl_mahasiswa');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/berkas/index',$data);
        $this->load->view('backend/akademik/template/v_footer');
    }
    
    public function simpan()
    {
        $this->form_validation->set_rules('nama', 'Nama mahasiswa', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
            ); 
           
            $this->MahasiswaModel->insert_mahasiswa($data);
            $this->session->set_flashdata('alert', 'Data mahasiswa berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('mahasiswa');
        }
    }

    public function lihat($id)
    {
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_mahasiswa($id);
        $this->load->view('mahasiswa/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_mahasiswa($id);
        $this->load->view('backend/akademik/mahasiswa/edit', $data);
    }

    public function delete($id)
    {
        $this->MahasiswaModel->delete_mahasiswa($id);
        $this->session->set_flashdata('alert', 'Data mahasiswa berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('mahasiswa');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('nama', 'nama', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_mahasiswa($id);
        $this->load->view('backend/akademik/mahasiswa/edit', $data);
    } else {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );
        $dataAlamat = array(
            'id' => $this->input->post('id'),
            'desa' => $this->input->post('desa'),
        ); 

        $this->MahasiswaModel->update_mahasiswa($id, $data);
        
        $this->AlamatModel->insert_alamat($dataAlamat);
        $this->session->set_flashdata('alert', 'Data mahasiswa berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('mahasiswa');
    }  
 }

}