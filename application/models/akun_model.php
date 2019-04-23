<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun_model extends CI_Model{
    function daftar($tabel,$data){
        $this->db->insert($tabel,$data);
        return $this->db->insert_id();;
    }
}