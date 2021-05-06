<?php

class Kategori extends CI_Controller
{
    public function make_up()
    {
        $data['make_up'] = $this->model_kategori->data_make_up()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('make_up', $data);
        $this->load->view('templates/footer');
    }
    public function skincare()
    {
        $data['skincare'] = $this->model_kategori->data_skincare()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('skincare', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }
    public function sandal_dan_sepatu_wanita()
    {
        $data['sandal_dan_sepatu_wanita'] = $this->model_kategori->data_sandal_dan_sepatu_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sandal_dan_sepatu_wanita', $data);
        $this->load->view('templates/footer');
    }
}
