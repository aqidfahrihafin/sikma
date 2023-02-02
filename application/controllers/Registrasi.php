<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('m_data');
    }
    public function index()
    {
        $data['tbl_priode'] = $this->m_data->get_data('tbl_priode')->result();
        $data['tbl_prodi'] = $this->m_data->get_data('tbl_prodi')->result();
        $this->load->view('frontend/template/v_header');
        $this->load->view('frontend/v_registrasi', $data);
        $this->load->view('frontend/template/v_footer');
    }

    public function aksi()
    {
        $this->form_validation->set_rules('id_pendaftaran', 'id_pendaftaran');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('priode', 'Priode', 'required');
        $this->form_validation->set_rules('nama', '"Name"', 'required');
        $this->form_validation->set_rules('tgl_lahir', '"Date of birth"', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('nim', '"Nim"', 'required|trim|is_unique[tbl_pendaftaran.nim]', [
            'is_unique' => 'NIM ini sudah terdaftar!!'
        ]);
        $this->form_validation->set_rules('password1', '"Password"', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password yang anda masukkan tidak sama!',
            'min_length' => 'Password minimal 8 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Web-ku';
            $data['tbl_priode'] = $this->m_data->get_data('tbl_priode')->result();
            $data['tbl_prodi'] = $this->m_data->get_data('tbl_prodi')->result();
            $this->load->view('frontend/template/v_header', $data);
            $this->load->view('frontend/v_registrasi', $data);
            $this->load->view('frontend/template/v_footer');
        } else {
            $data = [
                'id_pendaftaran' => htmlspecialchars($this->input->post('id_pendaftaran', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'prodi' => htmlspecialchars($this->input->post('prodi', true)),
                'priode' => htmlspecialchars($this->input->post('priode', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'password' => htmlspecialchars($this->input->post('password1')),
                // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'status_pendaftaran' => 'pending',
                'volume' => 'n',
                'pembayaran' => 'IST' . time(),
                'persyaratan' => 'mhs-22' . time(),
                'date_created' => time()
            ];
            $this->db->insert('tbl_pendaftaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert alert-dismissible" style="background-color: rgba(0, 128, 0, 0.521);color:white;" align="justify">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Selamat!</h4>
            Registrasi berhasil, silahkan login!
          </div>');
            redirect('home');
        }
    }
}
