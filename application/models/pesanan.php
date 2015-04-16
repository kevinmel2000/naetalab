<?php
    class Pesanan extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        function tambah() 
        {
            $data= array (
                'nama'=>$this->input->post('nama'),
                'email'=>$this->input->post('email'),
                'notelp'=>$this->input->post('notelp'),
                'pesan'=>$this->input->post('pesan'),
                'tanggal'=>$this->input->post('tanggal'),
                'paket'=>$this->input->post('paket'),
            );             
            $this->db->insert('pesan',$data);
         }
        
}