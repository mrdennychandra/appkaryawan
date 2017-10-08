<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('auth');
        cek_session();
    }

    public function index() {
        $query = $this->db->get("divisi");
        $data['records'] = $query->result_array();
        $this->load->view('divisi/index', $data);
    }

    public function tambah() {
        if (is_admin()) {
            $this->load->view('divisi/tambah');
        } else {
            redirect(base_url('welcome'));
        }
    }

    public function tambah_save() {
        if (is_admin()) {
            $this->form_validation->set_rules('kode', 'Kode', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            if ($this->form_validation->run() == FALSE) {
                $divisiid = $this->post('divisiid');
                $query = $this->db->get_where("divisi", array("divisiid" => $divisiid));
                $result = $query->result_array()[0];
                $data['divisiid'] = $divisiid;
                $data['kode'] = $result['kode'];
                $data['nama'] = $result['nama'];
                $this->load->view('divisi/edit', $data);
            } else {
                $this->load->model('Divisi_Model');
                $data = array(
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama')
                );
                $this->Divisi_Model->insert($data);
                redirect(base_url('/divisi'));
            }
        } else {
            redirect(base_url('welcome'));
        }
    }

    public function edit() {
        if (is_admin()) {
            $divisiid = $this->uri->segment('3');
            $query = $this->db->get_where("divisi", array("divisiid" => $divisiid));
            $result = $query->result_array()[0];
            $data['divisiid'] = $divisiid;
            $data['kode'] = $result['kode'];
            $data['nama'] = $result['nama'];
            $this->load->view('divisi/edit', $data);
        } else {
            redirect(base_url('welcome'));
        }
    }

    public function detail() {
        $divisiid = $this->uri->segment('3');
        $query = $this->db->get_where("divisi", array("divisiid" => $divisiid));
        $result = $query->result_array()[0];
        $data['divisiid'] = $divisiid;
        $data['kode'] = $result['kode'];
        $data['nama'] = $result['nama'];
        $this->load->view('divisi/detail', $data);
    }

    public function edit_save() {
        if (is_admin()) {
            $this->form_validation->set_rules('kode', 'Kode', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('divisi/tambah');
            } else {
                $this->load->model('Divisi_Model');
                $data = array(
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama')
                );
                $divisiid = $this->input->post('divisiid');
                $this->Divisi_Model->update($data, $divisiid);
                redirect(base_url('/divisi'));
            }
        } else {
            redirect(base_url('welcome'));
        }
    }

    public function hapus() {
        if (is_admin()) {
            $this->load->model('Divisi_Model');
            $divisiid = $this->uri->segment('3');
            $this->Divisi_Model->delete($divisiid);
            redirect(base_url('/divisi'));
        } else {
            redirect(base_url('welcome'));
        }
    }

}
