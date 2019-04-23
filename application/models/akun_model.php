<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun_model extend CI_Model{
    function daftar($tabel,$data){
        $this->insert->($tabel,$data);
        return $this->db->insert_id();;
    }
}