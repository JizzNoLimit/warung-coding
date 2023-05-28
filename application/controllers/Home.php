<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        $head = [
            "title" => "Inventory Warung"
        ];
        
        $this->load->view('templates/header', $head);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}