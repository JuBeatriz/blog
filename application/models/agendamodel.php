<?php

class agendamodel extends CI_model{
    public function __contruct(){
        parent::__contruct();
        $this->load->database();
    }

    public function getAll(){
        $query = $this->db->get('contato');
        return $query->result();
    }
}