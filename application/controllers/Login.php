<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('v_login');
	}
	public function email()
	{
		$this->load->view('email');
	}

	public function aksi()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() != false) {
			// menangkap data username dan password dari halaman login
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => password_verify($password),
				'status' => 1
			);
			$this->load->model('M_data');
			// cek kesesuaian login pada table pengguna
			$cek = $this->M_data->cek_login('tbl_user', $where)->num_rows();
			// cek jika login benar
			if ($cek > 0) {
				// ambil data pengguna yang melakukan login
				$data = $this->M_data->cek_login('tbl_user', $where)->row();
				// buat session untuk pengguna yang berhasil login
				$data_session = array(
					'id' => $data->id_user,
					'username' => $data->username,
					'level' => $data->level,
					'status' => 'telah_login'
				);
				$this->session->set_userdata($data_session);
				// alihkan halaman ke halaman dashboard pengguna
				redirect(base_url() . 'dashboard/');
			} else {
				redirect(base_url() . 'login?alert=gagal');
			}
		} else {
			$this->load->view('v_login');
		}
	}
}
