<?php
    class Crud extends CI_Model
    {
        public function __construct()
        {
        $this->load->database();
        }
        
        function select()
        {
        $this->db->order_by('nama','ASC');
        $query=$getData=$this->db->get('pesan');
        if($getData->num_rows()>0)
            return $query;
        else
            return null;
        }
        
    }