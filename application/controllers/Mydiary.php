<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydiary extends CI_Controller {
    // public function __construct()
    // {
    //     parent::__construct();
    // }
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
      $this->load->view('new_entry');
    }
}
?>