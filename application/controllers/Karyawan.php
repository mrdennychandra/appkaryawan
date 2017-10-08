<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $sql = "SELECT k.*,d.nama as namadivisi FROM karyawan k "
                . "INNER JOIN divisi d on d.divisiid=k.divisiid";
        $query = $this->db->query($sql);
        $data['karyawans'] = $query->result_array();
        $this->load->view("karyawan/index", $data);
    }

    public function tambah() {
        $sql = "SELECT divisiid,nama FROM divisi";
        $query = $this->db->query($sql);
        $data['divisi'] = $query->result_array();
        $jabatan = [
            'Manajer' => 'Manajer',
            'Supervisor' => 'Supervisor',
            'Karyawan' => 'karyawan'
        ];
        $data['jabatan'] = $jabatan;
        $this->load->view("karyawan/tambah", $data);
    }

}
