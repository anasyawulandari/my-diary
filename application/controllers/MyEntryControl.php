<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class MyEntryControl extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('newEntry_model');
    }

    function index(){
        $id = $this->session->userdata('sesilogin');
        
        if($id){
            $data["entri"] = $this->newEntry_model->getEntryById($id);
            $this->load->view('myentry',$data);    
        }else{
            redirect('/');
        }
    }


}