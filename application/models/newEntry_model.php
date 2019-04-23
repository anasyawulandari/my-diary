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
}

?>