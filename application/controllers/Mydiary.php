<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydiary extends CI_Controller {
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    function __construct(){
      parent::__construct();
      $this->load->library(array('form_validation'));
      $this->load->helper(array('url','form'));
      $this->load->model('newEntry_model');
  }
    public function index()
    {
      $this->load->view('index');
      $this->load->view('footer');

    }
    public function Viewentry(){
      $this->load->view('viewEntry');
    }
    public function about()
    {
      $this->load->view('about');
    }
    public function register()
    {
      $this->load->view('registrasi01');
    }

    public function newEntry()
    {
      $this->load->view('new_entry');
    }
    public function edit(){
      $this->load->view('edit');
    }
    
    public function myentry(){
      $data["entri"] = $this->newEntry_model->getEntry();
      $this->load->view('myentry',$data);
    }
    public function logout(){
      $this->load->view('logout');
    }
    public function delete(){
      $this->load->view('delete_entry');
    }
    public function account(){
      $this->load->view('akun');
    }
    public function editentry($id_entry){
      $data = $this->db->query("SELECT * FROM tb_entry WHERE id_entry='".$id_entry."' ")->row();
      $this->load->view('editentry',['data'=>$data]);
    }
    
    
}
?>