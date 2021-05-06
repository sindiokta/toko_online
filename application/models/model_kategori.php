<?php

class Model_kategori extends CI_Model
{
    public function data_make_up()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'make up'));
    }
    public function data_skincare()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'skincare'));
    }
    public function data_pakaian_wanita()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian wanita'));
    }
    public function data_sandal_dan_sepatu_wanita()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'sandal dan sepatu wanita'));
    }
}
