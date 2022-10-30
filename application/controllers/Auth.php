<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthModel');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login SI PERPUS Sanjaya';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $data_login = $this->AuthModel->getLoginData();
        $staff = $this->db->get_where('staff', ['st_username' => $data_login['username'], 'st_password' => $data_login['password']])->row_array();

        if ($staff == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email atau Password salah!
           </div>');

            redirect('auth');
        } else {
            $data = [
                'st_username' => $staff['st_username'],
                'st_role' => $staff['st_role']
            ];

            $this->session->set_userdata($data);
            redirect('dashboard');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('st_username');
        $this->session->unset_userdata('st_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda telah logout!
        </div>');

        redirect('auth');
    }
}