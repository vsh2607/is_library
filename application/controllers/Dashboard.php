<?php


class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('BukuModel');
        $this->load->model('PeminjamanModel');
        $this->load->helper('download');
    }

    private function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }

    public function download()
    {
        force_download('assets/files/Modul.pdf', NULL);
    }


    public function index()
    {
        $data['staff'] = $this->userData();
        $data['page_title'] = 'Dashboard';
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['total_anggota'] = $this->AnggotaModel->getTotalAnggota();
        $data['total_buku_paket'] = $this->BukuModel->getTotalBukuPaket();
        $data['total_buku_nonpaket'] = $this->BukuModel->getTotalBukuNonPaket();
        $data['buku_terlambat'] = $this->PeminjamanModel->getLate();



        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->load->view('templates/menu_header', $data);
            $this->load->view('dashboard/dashboard', $data);
            $this->load->view('templates/menu_footer');
        }
    }
}
