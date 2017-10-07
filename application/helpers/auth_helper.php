<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('cek_session')) {
    function cek_session() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['islogin'])) {
            echo "anda harus login terlebih dahulu";
            exit;
        }
    }
}

if (!function_exists('is_admin')) {
    function is_admin() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 'ADMIN') {
                return false;
            }
        }
        return true;
    }
}