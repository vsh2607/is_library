<?php

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PeminjamanModel');
        $this->load->model('AnggotaModel');
        $this->load->model('BukuModel');
    }


    public function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }

    public function index()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['date_now'] = $this->PeminjamanModel->dateNow();
        
        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');
            
            redirect('auth');
        } else {
            
            $data['data_anggota'] = $this->AnggotaModel->getAllData();
            $data['data_buku_nonpaket'] = $this->BukuModel-> getAllNonPaket();
            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/peminjaman', $data);
            $this->load->view('templates/menu_footer');
        }
    }
}
