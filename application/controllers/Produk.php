<?php

class Produk extends CI_Controller {

    public function index() {
        $head = [
            "title" => "Produk Warung Coding"
        ];

        $this->load->view('templates/header', $head);
        $this->load->view('produk/index');
        $this->load->view('templates/footer');
    }
}