<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Register_controller extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('akun_model');
    }

    public function index(){
        $this->load->view('registrasi01');
    }
    public function daftarakun(){
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required|md5');

        if($this->form_validation->run() == false){
            redirect('index.php/register_controller');
        } else {
            $data = array(
                "nama" => $this->input->post('username');
                "username" => $this->input->post('username'),
                "password" => md5($this->input->post('password')),
                "email" => $this->input->post('email'),
                "judul_diary" => $this->input->post('juduldiary'),
                "bahasa" => $this->input->post('bahasa'),
                "status" => $this->input->post('status')
            );
            $this->session->set_flashdata('daftar','pendaftaran berhasil');
            redirect('Mydiary');
        }
    }
}