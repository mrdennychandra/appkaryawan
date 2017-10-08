<?php

class Karyawan_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data) {
        if ($this->db->insert("karyawan", $data)) {
            return true;
        }
    }

    public function delete($karyawanid) {
        if ($this->db->delete("karyawan", "karyawanid = " . $karyawanid)) {
            return true;
        }
    }

    public function update($data, $karyawanid) {
        $this->db->set($data);
        $this->db->where("karyawanid", $karyawanid);
        $this->db->update("karyawan", $data);
    }
}
