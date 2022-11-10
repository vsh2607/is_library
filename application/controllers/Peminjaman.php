<?php

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PeminjamanModel');
        $this->load->model('AnggotaModel');
        $this->load->model('BukuModel');
        $this->load->model('PeminjamanModel');
    }


    public function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }

    #Untuk menampilkan inputan peminjaman buku non paket
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
            $data['data_buku_nonpaket'] = $this->BukuModel->getAllNonPaket();
            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/peminjaman_nonpaket', $data);
            $this->load->view('templates/menu_footer');
        }
    }


    #Untuk menampilkan inputan peminjaman buku paket
    public function index2()
    {
    }


    #Untuk menampilkan list buku peminjaman non paket
    public function show_np()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['date_now'] = $this->PeminjamanModel->dateNow();
        $data['data_join'] = $this->PeminjamanModel->getJoinData();

        var_dump($data['data_join']);
        die();
        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {

            $data['data_anggota'] = $this->AnggotaModel->getAllData();
            $data['data_buku_nonpaket'] = $this->BukuModel->getAllNonPaket();
            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/list_peminjaman_nonpaket', $data);
            $this->load->view('templates/menu_footer');
        }
    }


    #Untuk menampilkan list buku peminjaman non paket
    public function show_p()
    {
    }





    public function pinjamNonPaket()
    {

        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {

            $this->PeminjamanModel->pinjamNonPaket();
        }
    }
}
