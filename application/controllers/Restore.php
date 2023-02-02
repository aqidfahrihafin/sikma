<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restore extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load library
        $this->load->library('file');

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
        $this->load->view('restore_view');
    }
    public function restore_db()
    {
        // read file
        $file_content = $this->file->read_file('./path/to/backup.sql');

        // restore database
        $this->db->query('USE `database_name`');
        foreach (explode(";\n", $file_content) as $sql) {
            $sql = trim($sql);
            if($sql) {
                $this->db->query($sql);
            }
        }
    }
}
