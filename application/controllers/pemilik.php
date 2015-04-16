<?php
    class Pemilik extends CI_Controller
    {
        public function __costruct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('input');
            $this->load->model('crud');
            $this->load->view('style');

        }
        
        public function index()
        {
            $data['data']=$this->crud->select();
            $this->load->view('pemilik/pengolahan',$data);
        }
        
    }