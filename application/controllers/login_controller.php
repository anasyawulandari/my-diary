<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class login_controller extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('newEntry_model');
    }
    function login(){
        if( $this->newEntry_model->login()==true){
            redirect('newEntry_controller');
        } else{
            redirect('Mydiary');
        }

    }
    function logout(){
        session_destroy();
        redirect('Mydiary/logout');
    }
}