<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_izin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data_session_id_karyawan = $this->session->userdata('id_karyawan');
        $data['karyawan'] = $this->db->get_where('new_dt_karyawan', ['id' => $data_session_id_karyawan])->row_array();
        $data['surat_izin'] = $this->db->get_where('new_si_sakit', ['id_karyawan' => $data_session_id_karyawan])->result();

        $this->load->view('templates/header');
        $this->load->view('app/surat_izin', $data);
        $this->load->view('templates/footer');
    }

    public function getSurat_izinById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_si_sakit', $where)->row_array();

        echo json_encode($data);
    }
}
