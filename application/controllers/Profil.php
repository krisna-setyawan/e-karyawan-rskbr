<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data_session_id = $this->session->userdata('id_karyawan');
		$data['karyawan'] = $this->db->get_where('new_dt_karyawan', ['id' => $data_session_id])->row_array();
		$data['friends'] = $this->db->get_where('new_dt_karyawan', ['bagian' => $data['karyawan']['bagian']])->result_array();
		$data['pelatihan'] = $this->db->query("SELECT COUNT(id) as jml FROM new_sertifikat WHERE id_karyawan = $data_session_id")->row_array();
		$data['izin'] = $this->db->query("SELECT COUNT(id) as jml FROM new_si_sakit WHERE id_karyawan = $data_session_id")->row_array();

		$this->load->view('templates/header');
		$this->load->view('app/profil', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit_biodata()
	{
		$this->load->view('app/edit_biodata');
	}
}
