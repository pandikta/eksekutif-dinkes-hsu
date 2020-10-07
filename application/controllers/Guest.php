<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Table_model');
        is_logged_in();
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Guest';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/index');
        $this->load->view('templates/footer');
    }

    public function tb_p2pm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablep2pm();

        $data['title'] = 'Table Pencegahan dan Pengendalian Penyakit Menular';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_p2pm');
        $this->load->view('templates/footer');
    }
    public function tb_p2ptm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablep2ptm();

        $data['title'] = 'Table Pencegahan dan Pengendalian Penyakit Tidak Menular';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_p2ptm');
        $this->load->view('templates/footer');
    }

    public function tb_kefarmasian()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablekefarmasian();

        $data['title'] = 'Table Kefarmasian, Alkes dan PKRT';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_kefarmasian');
        $this->load->view('templates/footer');
    }

    public function tb_kkgm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablekkgm();

        $data['title'] = 'Table Kesehatan Keluarga dan Gizi Masyarakat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_kkgm');
        $this->load->view('templates/footer');
    }

    public function tb_kkko()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablekkko();

        $data['title'] = 'Table Kesling, Kesehatan Kerja dan Olahraga';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_kkko');
        $this->load->view('templates/footer');
    }

    public function tb_ppm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTableppm();

        $data['title'] = 'Table Promosi dan Pemberdayaan Masyarakat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_ppm');
        $this->load->view('templates/footer');
    }

    public function tb_sdmspk()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablesdmspk();

        $data['title'] = 'Table Sumber Daya manusia dan Sarana Prasarana Kesehatan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_sdmspk');
        $this->load->view('templates/footer');
    }

    public function tb_yankes()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTableyankes();

        $data['title'] = 'Table Yankes';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_yankes');
        $this->load->view('templates/footer');
    }

    public function tb_survimun()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablesurvimun();

        $data['title'] = 'Table Surveilands dan Imunisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/tb_survimun');
        $this->load->view('templates/footer');
    }

    public function chart_p2pm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pencegahan dan Pengendalian Penyakit Menular';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_p2pm');
        $this->load->view('templates/footer');
    }

    public function chart_p2ptm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pencegahan dan Pengendalian Penyakit Tidak Menular';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_p2ptm');
        $this->load->view('templates/footer');
    }

    public function chart_yankes()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'YANKES';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_yankes');
        $this->load->view('templates/footer');
    }

    public function chart_kefarmasian()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kefarmasian, Alkes dan PKRT';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_kefarmasian');
        $this->load->view('templates/footer');
    }

    public function chart_ppm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Promosi dan Pemberdayaan Masyarakat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_ppm');
        $this->load->view('templates/footer');
    }

    public function chart_kkko()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kesling, Kesehatan Kerja dan Olahraga';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_kkko');
        $this->load->view('templates/footer');
    }

    public function chart_sdmspk()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Sumber Daya manusia dan Sarana Prasarana Kesehatan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_sdmspk');
        $this->load->view('templates/footer');
    }

    public function chart_survimun()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Surveilands dan Imunisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_survimun');
        $this->load->view('templates/footer');
    }

    public function chart_kkgm()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kesehatan Keluarga dan Gizi Masyarakat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guest', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/chart_kkgm');
        $this->load->view('templates/footer');
    }
}
