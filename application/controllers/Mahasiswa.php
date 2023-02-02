<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->model('AlamatModel');
        $this->load->model('UsersModel');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }

    }

    public function index()
    {
        $data['title'] = "Data mahasiswa";

        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $this->db->join('tbl_alamat', 'tbl_mahasiswa.nim = tbl_alamat.nim_mahasiswa');
        $query = $this->db->get();

        $data['result'] = $query->result();
        
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_all_mahasiswa();
        $data['tbl_alamat'] = $this->AlamatModel->get_all_alamat();
        $data['jumlah'] = $this->db->count_all('tbl_mahasiswa');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/mahasiswa/index',$data);
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
                'nim' => $this->input->post('nim'),
            ); 
            $dataAlamat = array(
                'nim_mahasiswa' => $this->input->post('nim'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten' => $this->input->post('kabupaten'),
            );
           
            $this->MahasiswaModel->insert_mahasiswa($data);
            $this->AlamatModel->insert_alamat($dataAlamat);
            $this->session->set_flashdata('alert', 'Data mahasiswa berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('mahasiswa');
        }
    }
    public function aktif_user()
    {
        $this->form_validation->set_rules('nim', 'nim mahasiswa', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/');
        } else {
            $data = array(
                'username' => htmlspecialchars($this->input->post('nim', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => md5($this->input->post('nim', true)),
                'level' => 'Mahasiswa',
                'status' => '1',
                'created_at' =>  time(),
            ); 
           
            $this->UsersModel->insert_user($data);
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
    $this->form_validation->set_rules('id_mahasiswa', 'id_mahasiswa', 'required');
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('id_alamat', 'id_alamat', 'required');
    $this->form_validation->set_rules('nim', 'id_mahasiswa', 'required');
    $this->form_validation->set_rules('desa', 'desa', 'required');
    $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
    $this->form_validation->set_rules('kabupaten', 'kabupaten', 'required');

       


    if ($this->form_validation->run() === FALSE) {
        $data['tbl_mahasiswa'] = $this->MahasiswaModel->get_mahasiswa($id);
        $dataAlamat['tbl_alamat'] = $this->AlamatModel->get_alamat($id1);
        $this->load->view('backend/akademik/mahasiswa/edit', $data);
    } else {
        $data = array(
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'nama' => $this->input->post('nama'),
        );
        $dataAlamat = array(
            'id_alamat' => $this->input->post('id_alamat'),
            'nim_mahasiswa' => $this->input->post('nim'),
            'desa' => $this->input->post('desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
        ); 

             // Start a transaction
             $this->db->trans_start();

             // Update data on tbl_mahasiswa
             $this->db->where('id_mahasiswa', $id);
             $this->db->update('tbl_mahasiswa', $data);
     
             // Update data on tbl_alamat
             $this->db->where('nim_mahasiswa', $id1);
             $this->db->update('tbl_alamat', $dataAlamat);
     
             // Complete the transaction
             $this->db->trans_complete();
             
        // $this->MahasiswaModel->update_mahasiswa($id, $data);
        
        // $this->AlamatModel->update_alamat($id, $dataAlamat);
        $this->session->set_flashdata('alert', 'Data mahasiswa berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('mahasiswa');
    }  
 }

}