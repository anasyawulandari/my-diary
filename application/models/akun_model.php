<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun_model extends CI_Model{
    function daftar($tabel,$data){
        $this->db->insert($tabel,$data);
        return $this->db->insert_id();
    }

    public function getuserdata($id_akun){
        return $this->db->get_where('tb_akun',array('id_akun',$id_akun))->row();
    }


 function login() {
    $username = $this->input->POST('e', TRUE);
    $password = $this->input->POST('p', TRUE);
    $query = $this->db->query("SELECT * from tb_akun where username= '$username' and password= '$password' LIMIT 1");
    if($query->num_rows() == 0){
        return false;
    }else{
        $data = $query->row();
        $_SESSION['sesiadmin'] = array('id'=>$data->id_akun,'username'=>$data->username,'nama'=>$data->nama,"email"=>$data->email,"password"=>$data->password);
        return true;
    }
}

public function tambahDataContent($data)
	{
		//use query builder to insert $data to table "deviants"
		$this->db->insert("contents", $data);
    }
    
}