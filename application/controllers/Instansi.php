<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instansi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('M_data');
    }

    public function aksi()
    {
        $nama_instansi      = $this->input->post('nama_instansi');
        $alamat      = $this->input->post('alamat');
        $kecamatan      = $this->input->post('kecamatan');
        $kabupaten      = $this->input->post('kabupaten');
        $kontak      = $this->input->post('kontak');

        $data   = array(
            'nama_instansi'    => $nama_instansi,
            'alamat'           => $alamat,
            'kecamatan'        => $kecamatan,
            'kabupaten'        => $kabupaten,
            'kontak'           => $kontak,
            'status'           => 'aktif',
        );
        $this->M_data->insert_data($data, 'tbl_instansi');
        redirect('mahasiswa/profil?alert=success');
    }
}
