<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_data');
        // untuk load liberary
        $this->load->dbutil();
        $this->load->helper('download');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $data['tbl_instansi'] = $this->M_data->get_data('tbl_instansi')->result();

        $this->db->where('fakultas', 'teknik');
        $data['pending'] = $this->db->count_all_results('tbl_prodi');
        $this->db->where('fakultas', 'mipa');
        $data['diterima'] = $this->db->count_all_results('tbl_prodi');
        $this->db->where('fakultas', 'mipa');
        $data['ditolak'] = $this->db->count_all_results('tbl_prodi');
        
        $data['user'] = $this->db->count_all_results('tbl_user');

        $this->load->view('backend/akademik/template/v_header',$data);
        $this->load->view('backend/akademik/dashboard/index', $data);
        $this->load->view('backend/akademik/template/v_footer');
    }
    public function backup_db()
    {
        // backup database
        $prefs = array(
            'format' => 'zip',
            'filename' => 'mybackup.sql'
        );
        $backup = $this->dbutil->backup($prefs);

        // download
        force_download('BackupDbSikma.zip', $backup);
    }
   
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login?alert=logout');
    }
}
