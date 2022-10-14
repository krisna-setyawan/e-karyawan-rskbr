<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
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
        $this->db->order_by('nama_unit', 'asc');
        $data['unit'] = $this->db->get('new_unit_bagian')->result();

        $this->load->view('templates/header');
        $this->load->view('app/unit', $data);
        $this->load->view('templates/footer');
    }

    public function getUnitById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_unit_bagian', $where)->row_array();

        echo json_encode($data);
    }

    public function getKaryawan()
    {
        $kode = $this->input->post('kode');

        $karyawan = $this->db->get_where('new_dt_karyawan', ['kd_bagian' => $kode])->result();

        echo json_encode($karyawan);
    }
}
