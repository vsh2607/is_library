<?php

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AnggotaModel');
    }

    public function coba(){
        $this->load->view('transaksi/test');
    }

    private function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }

    public function edit($anggotaImgUrl)
    {
        $data['staff'] = $this->userData();

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->form_validation->set_rules('agt_no_id', 'No Identitas', 'trim|required|numeric');
            $this->form_validation->set_rules('agt_nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('agt_dob', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('agt_alamat', 'Alamat', 'trim|required');

            if ($this->form_validation->run() == true) {

                $config['upload_path']          = './assets/images/anggota';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('agt_img_url')) {

                    $latestImgUrl = $this->upload->data('file_name');
                    $this->AnggotaModel->edit($anggotaImgUrl, $latestImgUrl);
                    redirect('anggota');
                }else{

                    $latestImgUrl = null;
                    $this->AnggotaModel->edit($anggotaImgUrl, $latestImgUrl);
                    redirect('anggota');
                    
                }
            }
        }
    }

    public function delete($noIdAnggota)
    {
        $data['staff'] = $this->userData();

        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $this->AnggotaModel->delete($noIdAnggota);
            redirect('anggota');
        }
    }

    public function index()
    {

        $data['staff'] = $this->userData();
        $data['title'] = 'Menu Perpus Sanjaya';


        if ($data['staff'] === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login terlebih dahulu!
            </div>');

            redirect('auth');
        } else {
            $data['data_anggota'] = $this->AnggotaModel->getAllData();
            $this->load->view('templates/menu_header', $data);
            $this->load->view('anggota/list', $data);
            $this->load->view('templates/menu_footer');
        }
    }

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

            $this->form_validation->set_rules('agt_no_id', 'No Identitas', 'trim|required|numeric');
            $this->form_validation->set_rules('agt_nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('agt_dob', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('agt_alamat', 'Alamat', 'trim|required');

            if ($this->form_validation->run() == false) {

                $this->load->view('templates/menu_header', $data);
                $this->load->view('anggota/add');
                $this->load->view('templates/menu_footer');
            } else {

                $config['upload_path']          = './assets/images/anggota';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);

                if (@$_FILES['agt_img_url']['name'] !== null) {
                    if ($this->upload->do_upload('agt_img_url')) {
                        $anggotaImgUrl = $this->upload->data('file_name');
                        $this->AnggotaModel->add($anggotaImgUrl);

                        redirect('anggota');
                    }
                } else {
                    $imgUrl = null;
                    $this->Anggota->add($imgUrl);
                    redirect('anggota');
                }
            }
        }
    }
}
