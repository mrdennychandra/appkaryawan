<?php

class Divisi_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("divisi", $data)) {
            return true;
        }
    }

    public function delete($divisiid) {
        if ($this->db->delete("divisi", "divisiid = " . $divisiid)) {
            return true;
        }
    }

    public function update($data, $divisiid) {
        $this->db->set($data);
        $this->db->where("divisiid", $divisiid);
        $this->db->update("divisi", $data);
    }

}
