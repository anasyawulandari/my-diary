<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class newEntry_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('newEntry_model');
    }

    public function index(){
        $this->load->view('new_entry');
    }

    public function uploadEntry(){
        $config['upload_path']      = './assets';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = 8048;
        $config['max_width']        = 3000;
        $config['max_height']       = 3000;

        $this->load->library('upload',$config);
        if (!$this->upload->uploadEntry('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('new_entry', $error);
        }else{
            $_data = array('upload_data' => $this->upload->data());
            $data = array(
                'judul' => $this->input->post('etitle');
                'isi' => $this->input->post('entry');
            );
            if($this->newEntry_model->addEntry($data)){
                echo'berhasil diupload';
                redirect('Mydiary')
            }else{
                echo'upload gagal';
            }
        }   
    }

    public function editEntry($id){
        $where = array('id_entry' => $id);
        $config['upload_path']          = './assets/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 8048;
	    $config['max_width']            = 3000;
        $config['max_height']           = 3000;
        
        $this->load->library('upload', $config);
        
        
    }
}
?>