<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_wisata');
    }
    public function index()
    {
        $data['base_url'] = site_url('Frontend/index');
        $data['wisata'] = $this->M_wisata->data_wisata();
        $data['tb_hotel'] = $this->M_wisata->data_hotel();
        $this->load->view('user/index', $data);
    }
    public function kontak()
    {
        $this->load->view('user/kontak');
    }
    public function air_terjun()
    {
        $data['base_url'] = site_url('Frontend/air_terjun');
        $data['wisata'] = $this->M_wisata->data_wisata();
        $this->load->view('user/air_terjun',$data);
    }
    public function hotel1()
    {
        $data['base_url'] = site_url('Frontend/hotel1');
        $data['tb_hotel'] = $this->M_wisata->data_hotel();
        $this->load->view('user/hotel1',$data);
    }
    public function about()
    {
        $this->load->view('user/about');
    }
}
