<?php


class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('BukuModel');
    }

    public function getBukuPaketX(){

        var_dump( $this->db->get_where('buku_paket', ['bkp_kelas'=>'X']));
        die();
        return $this->db->get_where('buku_paket', ['bkp_kelas'=>'X']);
    }

    //user data
    private function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }

    //List Buku Paket
    public function index()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['data_buku'] = $this->BukuModel->getAllPaket();

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->load->view('templates/menu_header', $data);
            $this->load->view('buku/list_paket', $data);
            $this->load->view('templates/menu_footer');
        }
    }

    //add Buku Paket
    public function add()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {

            $this->form_validation->set_rules('bkp_no_induk', 'No Induk Buku', 'trim|required');
            $this->form_validation->set_rules('bkp_judul_buku', 'Judul Buku', 'trim|required');
            $this->form_validation->set_rules('bkp_kategori_buku', 'Kategori Buku', 'required');
            $this->form_validation->set_rules('bkp_pengarang', 'Pengarang Buku', 'trim|required');
            $this->form_validation->set_rules('bkp_penerbit', 'Penerbit Buku', 'trim|required');
            $this->form_validation->set_rules('bkp_kelas', 'Kelas Buku', 'required');
            $this->form_validation->set_rules('bkp_tahun_terbit', 'Tahun Terbit Buku', 'required');
            $this->form_validation->set_rules('bkp_sumber_asal', 'Sumber Asal Buku', 'required');
            $this->form_validation->set_rules('bkp_jumlah_buku', 'Jumlah Buku', 'required');


            if ($this->form_validation->run() == false) {
                $this->load->view('templates/menu_header', $data);
                $this->load->view('buku/add_paket');
                $this->load->view('templates/menu_footer');
            } else {
                $this->BukuModel->add();
                redirect('buku');
            }
        }
    }


    //add Buku Non Paket
    public function addN()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';


        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {


            $this->form_validation->set_rules('bnp_no_inventaris', 'No. Inventaris', 'trim|required');
            $this->form_validation->set_rules('bnp_judul_buku', 'Judul Buku', 'trim|required');
            $this->form_validation->set_rules('bnp_pengarang', 'Pengarang Buku', 'trim|required');
            $this->form_validation->set_rules('bnp_klasifikasi', 'Klasifikasi Buku', 'required');


            if ($this->form_validation->run() == false) {
                $this->load->view('templates/menu_header', $data);
                $this->load->view('buku/add_fiksi');
                $this->load->view('templates/menu_footer');
            } else {
                $this->BukuModel->addN();
                redirect('buku/index2');
            }
        }
    }


    //List Buku Non Paket (fiksi)
    public function index2()
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        $data['data_buku'] = $this->BukuModel->getAllNonPaket();

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->load->view('templates/menu_header', $data);
            $this->load->view('buku/list_fiksi', $data);
            $this->load->view('templates/menu_footer');
        }
    }

    //delte buku paket
    public function delete($noIdBuku)
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->BukuModel->delete($noIdBuku);
            redirect('buku');
        }
    }


    //Delete buku non paket
    public function deleteN($noIdBuku)
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->BukuModel->deleteN($noIdBuku);
            redirect('buku/index2');
        }
    }


    public function edit($noIdBuku)
    {
        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->BukuModel->edit($noIdBuku);
            redirect('buku/index');
        }


    }

    public function editN($noIdBuku)
    {

        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';
        

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->BukuModel->editN($noIdBuku);
            redirect('buku/index2');
        }


    }
}
