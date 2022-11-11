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
        $data['date_one_week'] = $this->PeminjamanModel->oneWeekFromNow();


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
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['date_now'] = $this->PeminjamanModel->dateNow();
        $data['date_one_year'] = $this->PeminjamanModel->oneYearFromNow();
        $data['buku_x'] = $this->BukuModel->getBukuPaketKelas('X');
        $data['buku_xi'] = $this->BukuModel->getBukuPaketKelas('XI');
        $data['buku_xii'] = $this->BukuModel->getBukuPaketKelas('XII');

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {

            $data['data_anggota'] = $this->AnggotaModel->getAllData();
            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/peminjaman_paket', $data);
            $this->load->view('templates/menu_footer');
        }
    }


    #Untuk menampilkan list buku peminjaman non paket
    public function show_np()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['date_now'] = $this->PeminjamanModel->dateNow();
        $data['data_join_transaksi'] = $this->PeminjamanModel->getTransaksiNonPaket();

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



    public function showDetail_np($kodeTransaksi)
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


            $data['transaksi_detail_nonpaket'] = $this->PeminjamanModel->getDetailTransaksiNonPaket($kodeTransaksi);

            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/detail_peminjaman_nonpaket', $data);
            $this->load->view('templates/menu_footer');
        }
    }



    public function returnBukuNP($noIdBuku, $kodeTransaksi, $noDetailTransaksi)
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->PeminjamanModel->returnBukuNP($noIdBuku, $kodeTransaksi, $noDetailTransaksi);
            redirect('peminjaman/showDetail_np/' . $kodeTransaksi);
        }
    }



    #Untuk menampilkan list buku peminjaman non paket
    public function show_p()
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

            $this->load->view('templates/menu_header', $data);
            $this->load->view('transaksi/list_peminjaman_paket', $data);
            $this->load->view('templates/menu_footer');
        }
    }

    //Function untuk pinjam buku paket
    public  function pinjamPaket()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {

            $this->PeminjamanModel->pinjamPaket();
            redirect('peminjaman/show_p');
        }
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
            redirect('peminjaman/show_np');
        }
    }
}
