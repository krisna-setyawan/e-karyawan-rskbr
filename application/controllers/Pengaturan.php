<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
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

        $this->load->view('templates/header');
        $this->load->view('app/pengaturan', $data);
        $this->load->view('templates/footer');
    }

    public function cek_pass_lama($pass, $id)
    {
        $user = $this->db->get_where('new_user', ['id_karyawan' => $id, 'password' => $pass])->row_array();
        if ($user) {
            $data['pass'] = 'benar';
        } else {
            $data['pass'] = 'salah';
        }
        echo json_encode($data);
    }

    public function ubah_password()
    {
        $data_update  = [
            'password' => $this->input->post('password_baru'),
        ];
        $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
        $this->db->update('new_user', $data_update);
    }
}
