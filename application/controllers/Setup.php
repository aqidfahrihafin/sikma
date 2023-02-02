<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SetupModel');
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
        $data['title'] = "Data setup";

        $data['tbl_setup'] = $this->SetupModel->get_all_setup();
        $data['jumlah'] = $this->db->count_all('tbl_setup');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/setup/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function tambah()
    {
        $this->load->view('setup/form_tambah');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nama_setup', 'Nama setup', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('setup/');
        } else {
            $data = array(
                'nama_setup' => $this->input->post('nama_setup'),
                'status' => $this->input->post('status'),
            );
            $this->SetupModel->insert_setup($data);
            $this->sweetalert->success("Notification Message");
            redirect('setup');
        }
    }

    public function lihat($id)
    {
        $data['tbl_setup'] = $this->SetupModel->get_setup($id);
        $this->load->view('setup/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_setup'] = $this->SetupModel->get_setup($id);
        $this->load->view('backend/akademik/setup/edit', $data);
    }

    public function delete($id)
    {
        $this->SetupModel->delete_setup($id);
        $this->session->set_flashdata('alert', 'Data setup berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 3000);
        redirect('setup');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_setup', 'id_setup', 'required');
    $this->form_validation->set_rules('nama_setup', 'nama_setup', 'required');
    $this->form_validation->set_rules('status', 'status', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_setup'] = $this->SetupModel->get_setup($id);
        $this->load->view('backend/akademik/priode/edit', $data);
    } else {
        $data = array(
            'id_priode' => $this->input->post('id_priode'),
            'nama_priode' => $this->input->post('nama_priode'),
            'status' => $this->input->post('status'),
        );

        $this->PriodeModel->update_priode($id, $data);
        $this->session->set_flashdata('alert', 'Data priode berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 3000);
        redirect('priode');
    }  
 }

}