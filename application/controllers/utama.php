<?php
    class Utama extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('input');
            $this->load->helper('url');
            $this->load->helper('form');
           
        }
        public function index()
        {
         $this->load->view('halaman');
        }
        public function fpesan()
        {
         $this->load->view('pesanan/pesanan');
        }
        public function pesan(){
            $this->load->model('pesanan');
            $this->pesanan->tambah();
           redirect ('utama','refresh');
        }
    }
