<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydiary extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //$this->load->view('nav2');
    
       
      $this->load->view('logout');
    //    $this->load->view('footer');
    //    $this->load->view('about');
    }
    
}
?>