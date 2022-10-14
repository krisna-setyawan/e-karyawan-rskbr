<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_kepegawaian extends CI_Controller
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
        $data['file_kepegawaian'] = $this->db->get_where('new_file_pegawai', ['id_karyawan' => $data_session_id_karyawan])->result();

        $this->load->view('templates/header');
        $this->load->view('app/file_kepegawaian', $data);
        $this->load->view('templates/footer');
    }

    public function getFile_kepegawaianById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_file_pegawai', $where)->row_array();

        echo json_encode($data);
    }
}
