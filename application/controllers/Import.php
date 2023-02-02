<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Import extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datadosen = array(
                            'nama_dosen'  => $row->getCellAtIndex(1),
                            'nid'  => $row->getCellAtIndex(2),
                            'prodi'  => $row->getCellAtIndex(3),
                            'jabatan'       => $row->getCellAtIndex(4),
                            'fakultas'       => $row->getCellAtIndex(5),
                            'alamat_dosen'       => $row->getCellAtIndex(6),
                            'no_hp'       => $row->getCellAtIndex(7),
                        );
                        $this->M_data->import_data($datadosen);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('dashboard/data_dosen');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
}
