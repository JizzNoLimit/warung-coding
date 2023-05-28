<?php

class Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProdukModel');
    }

    public function index() {
        $head = [
            "title" => "Produk Warung Coding"
        ];

        $data['produks'] = $this->ProdukModel->getProduk()->result();
        // $mahasiswa = [
        //     "nama" => $da
        // ];
        
        $this->load->view('templates/header', $head);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah() {
        $nama = $this->input->post('nama');
        redirect('produk/index');
    }
}