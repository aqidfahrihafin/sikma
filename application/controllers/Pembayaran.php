<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {
        $data['tbl_pendaftaran'] = $this->db->query("SELECT * FROM tbl_pendaftaran,tbl_pembayaran WHERE pembayaran=no_pembayaran  order by id_pembayaran desc")->result();
        $data['tbl_pembayaran'] = $this->M_data->get_data('tbl_pembayaran')->result();
        $this->load->view('backend/akademik/template/v_header');
        $this->load->view('backend/akademik/pembayaran/v_pembayaran', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }
    public function update_pembayaran()
    {
        $this->form_validation->set_rules('id_pembayaran', 'ID pembayaran', 'required');

        if ($this->form_validation->run() != false) {
            $id_pembayaran = $this->input->post('id_pembayaran');
            $status_pembayaran = $this->input->post('status_pembayaran');
            $catatan = $this->input->post('catatan');

            $where = array(
                'id_pembayaran' => $id_pembayaran
            );
            $data = array(
                'status_pembayaran' => $status_pembayaran,
                'catatan' => $catatan,
            );
            $this->M_data->update_data($where, $data, 'tbl_pembayaran');
            redirect(base_url() . 'pembayaran/?alert=sukses');
        } else {

            redirect(base_url() . 'mahasiswa/profil/?alert=gagal');
        }
    }
    public function delete_pembayaran($id)
    {
        $where = array(
            'id_pembayaran' => $id
        );
        $bukti_pembayaran['tbl_pembayaran'] = $this->M_data->edit_data($where, 'tbl_pembayaran')->result();
        $bukti_pembayaran = './files/pembayaran/' . $bukti_pembayaran;
        $this->M_data->delete_data($where, 'tbl_pembayaran');

        if (is_readable($bukti_pembayaran) && unlink($bukti_pembayaran)) {
            $this->M_data->delete_data($where, 'tbl_pembayaran');
            redirect(base_url() . 'pembayaran?alert=sukseshapus');
        } else {
            redirect(base_url() . 'pembayaran?alert=sukseshapus');
        }
    }
}
