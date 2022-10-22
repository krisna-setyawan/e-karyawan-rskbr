<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$sesion = $this->session->userdata('new_ekaryawan');
		if ($sesion) {
			redirect('profil');
		} else {
			$this->form_validation->set_rules('username', 'username', 'required|trim', [
				'required' => 'Username Belum Diisi!',
			]);
			$this->form_validation->set_rules('password', 'Password', 'required|trim', [
				'required' => 'Password Belum Diisi!',
			]);

			if ($this->form_validation->run() == false) {
				$this->load->view('auth/login');
			} else {
				$this->_login();
			}
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('new_user', ['username' => $username])->row_array();

		//jika username ada
		if ($user) {
			//cek password
			if ($password == $user['password']) {
				$data = [
					'username' => $user['username'],
					'nama_user' => $user['nama_user'],
					'id_karyawan' => $user['id_karyawan'],
					'new_ekaryawan' => 'ok',
				];
				$this->session->set_userdata($data);
				redirect('profil');
			} else {
				$this->session->set_flashdata('Pesan', '
					<div class="alert alert-danger mb-1" role="alert">
						Password Salah.
					</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('Pesan', '
				<div class="alert alert-danger mb-1" role="alert">
					Username tidak ditemukan.
				</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('new_ekaryawan');

		redirect('auth');
	}


	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
