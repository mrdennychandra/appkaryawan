<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('login');
    }

    function cek() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );
            $query = $this->db->get_where("users", $data);
            $result = $query->result_array();
            if (count($result) > 0) {
                $result = $result[0];
                session_start();
                $_SESSION['islogin'] = true;
                $_SESSION['username'] = $result['username'];
                $_SESSION['role'] = $result['role'];
                redirect(base_url('welcome'));
            } else {
                echo "username atau password salah";
                $this->load->view('login');
            }
        }
    }

    function halo() {
        $data['nama'] = "Denny Chandra";
        $this->load->view('halo', $data);
    }

}
