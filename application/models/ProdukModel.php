<?php

class ProdukModel extends CI_Model {

    public function getProduk() {
        return $this->db->get('produk');
    }
}