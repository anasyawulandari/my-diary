<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newEntry_model extends CI_Model {
    function addEntry($data){
        $query = $this->db->insert("tb_entry",$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    function getEntry(){
        $query = $this->db->get("tb_entry");
        if($query->num_rows() != 0){
            return $query->result();
        }else{
            return false;
        }
    }

    function editEntry($table,$where,$data){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function getWhereEntry($table,$where){
        return $this->db->get_where($table,$where);
    }

    function login() {
        $username = $this->input->POST('e', TRUE);
        $password = $this->input->POST('p', TRUE);
        $query = $this->db->query("SELECT * from tb_akun where username= '$username' and password= '$password' LIMIT 1");
        if($query->num_rows() == 0){
            return false;
        }else{
            $data = $query->row();
            $_SESSION['sesilogin'] = array('id'=>$data->id_akun,'username'=>$data->username,'nama'=>$data->nama,"email"=>$data->email,"password"=>$data->password);
            return true;
        }
    }
}

?>