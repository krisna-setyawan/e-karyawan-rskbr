<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen_pribadi extends CI_Controller
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
        $data['dokumen'] = $this->db->get_where('new_dokumen', ['id_karyawan' => $data_session_id_karyawan])->result();

        $this->load->view('templates/header');
        $this->load->view('app/dokumen', $data);
        $this->load->view('templates/footer');
    }

    public function getDokumenById($id)
    {
        $where = array(
            'id' => $id
        );
        $data = $this->db->get_where('new_dokumen', $where)->row_array();

        echo json_encode($data);
    }

    public function add_aksi()
    {
        $upload_file = $_FILES['file_input']['name'];

        $nama_dokumen = $this->input->post('nama_dokumen');
        $id_karyawan = $this->input->post('id_karyawan');
        $upload_at = date('Y-m-d H:i:s');

        if ($upload_file) {
            // $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . '/kepegawaian/assets/images/dokumen';
            $config['upload_path'] = './assets/uploads/dokumen_pribadi';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['file_name'] = $nama_dokumen . ' ' . $id_karyawan;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_input')) {

                $data = array(
                    'id_karyawan' => $id_karyawan,
                    'nama_dokumen' => $nama_dokumen,
                    'file' => $this->upload->data('file_name'),
                    'upload_at' => $upload_at,
                );
                $this->db->insert('new_dokumen', $data);

                redirect('dokumen_pribadi');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $data = array(
                'id_karyawan' => $id_karyawan,
                'nama_dokumen' => $nama_dokumen,
                'file' => 'foto-default.jpg',
                'upload_at' => $upload_at,
            );
            $this->db->insert('new_dokumen', $data);

            redirect('dokumen_pribadi');
        }
    }



    public function delete($id)
    {
        //hapus foto difolder jika foto lama bukan default
        $dokumen = $this->db->get_where('new_dokumen', ['id' => $id])->row_array();
        $file_lama = $dokumen['file'];
        if ($file_lama != 'foto-default.jpg') {
            // unlink($_SERVER['DOCUMENT_ROOT'] . '/kepegawaian/assets/images/dokumen/' . $file_lama);
            unlink('./assets/uploads/dokumen_pribadi/' . $file_lama);
        }

        $where = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('new_dokumen');
        redirect('dokumen_pribadi');
    }
}
