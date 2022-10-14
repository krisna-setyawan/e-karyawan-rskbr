<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_anak extends CI_Controller
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
        $data['anak'] = $this->db->get_where('new_anak', ['id_karyawan' => $data_session_id_karyawan])->result();

        $this->load->view('templates/header');
        $this->load->view('app/data_anak', $data);
        $this->load->view('templates/footer');
    }

    public function getAnakById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_anak', $where)->row_array();

        echo json_encode($data);
    }

    public function add_anak_aksi()
    {
        $data = array(
            'id_karyawan' => $this->input->post('id_karyawan'),
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'status' => $this->input->post('status'),
        );
        $this->db->insert('new_anak', $data);
        redirect('data_anak');
    }

    public function edit_anak($id)
    {
        $data = $this->db->get_where('new_anak', ['id' => $id])->row_array();
        echo json_encode($data);
    }

    public function edit_anak_aksi()
    {
        $id = $this->input->post('edit_id');

        $data = array(
            'nama' => $this->input->post('edit_nama'),
            'tgl_lahir' => $this->input->post('edit_tgl_lahir'),
            'status' => $this->input->post('edit_status'),
        );
        $this->db->where('id', $id);
        $this->db->update('new_anak', $data);
        redirect('data_anak');
    }

    public function delete_anak($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('new_anak');
        redirect('data_anak');
    }
}
