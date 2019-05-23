<?php
 
 class agendacontroller extends CI_controller{
     public $agenda;
     public function _construct() {
         parent:: __contruct();
         $this->load->model("agendamodel");
         $this->agenda = new agendamodel();
         
     }
     public function index() {
         $data = $this->agenda->getAll();
         $this->load->view('agenda/list', $data);
     }
 }