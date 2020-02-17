<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa extends CI_Controller {
        
        // public function __construct(){
        //     parent::__construct();
        //     $this->load->database();
        // }

        public function index()
        {   
            $this->load->model('mahasiswa_model');
            //$this->load->database();
            $data['title']='List Mahasiswa';
            $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/index');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Controllername.php */
    
?>