<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
        //return $this->db->get('mahasiswa')->result_array();
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
        

    }

    // public function index(){
    //     $data['title']='List Mahasiswa';
    //     $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
    //     $this->load->view('template/header',$data);
    //     $this->load->view('mahasiswa/index',$data);
    //     $this->load->view('template/footer');
    // }

}

/* End of file Controllername.php */
?>