<?php


class Dashboard extends CI_Controller
{

    private function userData()
    {
        $data['staff'] = $this->db->get_where('staff', ['st_username' => $this->session->userdata('st_username')])->row_array();
        return $data['staff'];
    }
    public function index()
    {
        $data['staff'] = $this->userData();
        $data['page_title'] = 'Dashboard';
        $data['title'] = 'Menu Perpus Sanjaya';


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