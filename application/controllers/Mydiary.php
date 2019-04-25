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
      $this->load->model('akun_model');
  }
    public function index()
    {
      $this->load->view('index');
      $this->load->view('footer');

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
      $id= $this->session->userdata('sesilogin');
      $data['nama'] = $this->akun_model->getuserdata($id)->nama;
      $this->load->view('new_entry',$data);
    }

    public function edit(){
      $id= $this->session->userdata('sesilogin');
      $data['nama'] = $this->akun_model->getuserdata($id)->nama;
      $this->load->view('edit',$data);
    }
    
    public function myentry(){
      redirect('myEntryControl');
    }

    public function logout(){
      $this->load->view('logout');
    }

    public function delete($id){
      $data['entry'] = $this->newEntry_model->getWhereEntry('tb_entry',array('id_entry'=>$id))->row();
      $id_akun= $this->session->userdata('sesilogin');
      $data['nama'] = $this->akun_model->getuserdata($id_akun)->nama;
      $this->load->view('delete_entry',$data);
    }

    public function account(){
      $id= $this->session->userdata('sesilogin');
      $data['nama'] = $this->akun_model->getuserdata($id)->nama;
      $this->load->view('akun',$data);
    }

    public function editentry($id_entry){
      $data = $this->db->query("SELECT * FROM tb_entry WHERE id_entry='".$id_entry."' ")->row();
      $this->load->view('editentry',['data'=>$data]);
    }
    
    public function deleteentry($id){
      $this->newEntry_model->deleteEntry('tb_entry',array('id_entry'=>$id));
      redirect('mydiary/myentry');
    }
    
    public function viewEntry($id){
      $data['entry'] = $this->newEntry_model->getWhereEntry('tb_entry',array('id_entry'=>$id))->row();
      $id_akun= $this->session->userdata('sesilogin');
      $data['nama'] = $this->akun_model->getuserdata($id_akun)->nama;
      $this->load->view('viewEntry',$data);
    }
}
?>