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
<<<<<<< HEAD
    public function newEntry()
    {
      $this->load->view('new_entry');
=======
    public function edit()
    {
      $this->load->view('edit');
>>>>>>> c3b6a4432a65694908123a10f815c18154c8cdb3
    }
}
?>