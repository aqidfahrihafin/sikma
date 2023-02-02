<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');
	}

	public function login_aksi()
	{
		$this->form_validation->set_rules('nim', 'nim', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() != false) {
			$nim = $this->input->post('nim');
			$password = $this->input->post('password');
			$where = array(
				'nim' => $nim,
				'password' => $password,
			);
			$this->load->model('M_data');
			$cek = $this->M_data->cek_login('tbl_pendaftaran', $where)->num_rows();
			if ($cek > 0) {
				$data = $this->M_data->cek_login('tbl_pendaftaran', $where)->row();
				$data_session = array(
					'id_pendaftaran' => $data->id_pendaftaran,
					'nim' => $data->nim,
					'nama' => $data->nama,
					'prodi' => $data->prodi,
					'tgl_lahir' => $data->tgl_lahir,
					'jenis_kelamin' => $data->jenis_kelamin,
					'persyaratan' => $data->persyaratan,
					'lokasi_pkl_satu' => $data->lokasi_pkl_satu,
					'date_created' => $data->date_created,
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url() . 'mahasiswa/');
			} else {
				redirect(base_url() . 'home?alert=gagal');
			}
		} else {
			$this->load->view('frontend/template/v_header');
			$this->load->view('frontend/v_index');
			$this->load->view('frontend/template/v_footer');
		}
	}
	public function index()
	{

		$data['tbl_pendaftaran'] = $this->m_data->get_data('tbl_pendaftaran')->result();
		$this->load->view('frontend/template/v_header');
		$this->load->view('frontend/v_index', $data);
		$this->load->view('frontend/template/v_footer');
	}
	public function pedoman()
	{
		$this->load->view('frontend/template/v_header');
		$this->load->view('frontend/v_pedoman_pkl');
		$this->load->view('frontend/template/v_footer');
	}
	public function instansi()
	{
		$data['tbl_instansi'] = $this->m_data->get_data('tbl_instansi')->result();
		$this->load->view('frontend/template/v_header');
		$this->load->view('frontend/v_instansi', $data);
		$this->load->view('frontend/template/v_footer');
	}
	public function pengumuman()
	{
		$this->load->view('frontend/template/v_header');
		$this->load->view('frontend/v_pengumuman');
		$this->load->view('frontend/template/v_footer');
	}
}
