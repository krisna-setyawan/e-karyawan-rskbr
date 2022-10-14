<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
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
        $this->db->order_by('nama_ktp', 'asc');
        $data['list_karyawan'] = $this->db->get_where('new_dt_karyawan', ['status_karyawan' => 'Aktif'])->result();

        $this->load->view('templates/header');
        $this->load->view('app/karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function getKaryawanById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_dt_karyawan', $where)->row_array();

        echo json_encode($data);
    }
}
