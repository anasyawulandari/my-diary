<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class newEntry_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('newEntry_model');
    }

    public function index(){
        if($this->session->userdata('sesilogin')){

            $this->load->view('edit');
        }else{
            redirect('Mydiary');
        }
        
   
    }

    public function uploadEntry(){
            $data = array(
                'timestamp' => date('Y-m-d H:i:s'),
                'judul' => $this->input->post('etitle'),
                'isi' => $this->input->post('entry'),
                'id_akun' => $this->session->userdata('sesilogin')
            );
            if($this->newEntry_model->addEntry($data)){
                echo'berhasil diupload';
                redirect('myentrycontrol');
            }else{
                echo'upload gagal';
            }
    }
    
    public function updateEntry($id_entry){
        $data = array(
            'timestamp' => date('Y-m-d H:i:s'),
            'judul' => $this->input->post('etitle'),
            'isi' => $this->input->post('entry'),
        );
        $where = array('id_entry'=>$id_entry);
        if($this->db->update('tb_entry',$data,$where)){
            echo'berhasil diupload';
            redirect('myentrycontrol');
        }else{
            echo'upload gagal';
        }
}


//     public function editEntry($id){
//         $where = array('id_entry' => $id);
//         $config['upload_path']          = './assets/';
// 	    $config['allowed_types']        = 'gif|jpg|png';
// 	    $config['max_size']             = 8048;
// 	    $config['max_width']            = 3000;
//         $config['max_height']           = 3000;
        
//         $this->load->library('upload', $config);
//         if(!$this->upload->uploadEntry('userfile')){
//             $judul = $this->input->post('etitle');
//             $isi = $this->input->post('entry');

//             $data = array(
//                 "judul" => $judul,
//                 "isi" => $isi,
//             )

//             $this->newEntry_model->editEntry("tb_entry",$where,$data);
// 			$this->session->set_flashdata('flash_success','Berhasil mengubah artikel !');    
//             redirect('myentry')
//         }else{
//             $judul = $this->input->post('etitle');
//             $isi = $this->input->post('entry')

//             $data = array{
//                 "judul" => $judul,
//                 "isi" => $isi,
//             }
//             $this->newEntry_model->editEntry("tb_entry",$where,$data);
//             $this->session->set_flashdata('flash_success','Berhasil mengubah entry !');
// 			redirect('myentry');
//         }

//         public function deleteEntry($id){
//             $_id = $this->db->get_where('tb_entry',['id_entry' => $id])->row();
//             $query = $this->db->delete('tb_entry',['id_entry'=>$id]);
           
//             $this->session->set_flashdata('flash_success','Berhasil menghapus entry !');
//             redirect('myentry');
//         }
        
//     }
// }
}
?>