<?php

class Users_Model extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        if ($this->db->insert("users", $data)) {
            return true;
        }
    }

    public function delete($userid) {
        if ($this->db->delete("users", "userid = " . $userid)) {
            return true;
        }
    }

    public function update($data, $userid) {
        $this->db->set($data);
        $this->db->where("userid", $userid);
        $this->db->update("users", $data);
    }

}
