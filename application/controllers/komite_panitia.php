<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komite_panitia extends CI_Controller
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
        $this->db->order_by('nama_komite', 'asc');
        $data['komite'] = $this->db->get('new_komite')->result();

        $this->load->view('templates/header');
        $this->load->view('app/komite', $data);
        $this->load->view('templates/footer');
    }

    public function getKomiteById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_komite', $where)->row_array();

        echo json_encode($data);
    }

    public function getAnggota()
    {
        $id_komite = $this->input->post('id_komite');

        $karyawan = $this->db->get_where('new_anggota_komite', ['id_komite' => $id_komite])->result();

        echo json_encode($karyawan);
    }
}
