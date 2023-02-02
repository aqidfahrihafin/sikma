<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
       
    }

    public function index()
    {
        if ($this->session->userdata('level') != 'Akademik') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            $this->session->set_flashdata('error_timeout', 4000);
            redirect('eror');
        }
        $data['title'] = "Data User";

        $data['tbl_user'] = $this->UsersModel->get_all_user();
        $data['jumlah'] = $this->db->count_all('tbl_user');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/users/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function profil()
    {
        $data['title'] = "Data User";

        $data['tbl_user'] = $this->UsersModel->get_all_user();
        $data['jumlah'] = $this->db->count_all('tbl_user');
        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/users/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('username', 'Nama user', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users/');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
            );
            $this->UsersModel->insert_user($data);
            $this->session->set_flashdata('alert', 'Data user berhasil <b>ditambahkan</b>');
            $this->session->set_flashdata('alert_timeout', 4000);
            redirect('users');
        }
    }

    public function lihat($id)
    {
        $data['tbl_user'] = $this->UsersModel->get_user($id);
        $this->load->view('users/lihat', $data);
    }

    public function edit($id)
    {
        $data['tbl_user'] = $this->UsersModel->get_user($id);
        $this->load->view('backend/akademik/users/edit', $data);
    }

    public function delete($id)
    {
        $this->UsersModel->delete_user($id);
        $this->session->set_flashdata('alert', 'Data user berhasil <b>dihapus</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('users');
    }

    public function update($id)
   { 
    $this->form_validation->set_rules('id_user', 'id_user', 'required');
    $this->form_validation->set_rules('username', 'username', 'required');

    if ($this->form_validation->run() === FALSE) {
        $data['tbl_user'] = $this->UsersModel->get_user($id);
        $this->load->view('backend/akademik/users/edit', $data);
    } else {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
        );

        $this->UsersModel->update_user($id, $data);
        $this->session->set_flashdata('alert', 'Data user berhasil <b>di update</b>');
        $this->session->set_flashdata('alert_timeout', 4000);
        redirect('users');
    }  
 }

}