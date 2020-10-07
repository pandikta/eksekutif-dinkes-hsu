<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        //agar saat sudah login, tdk bisa balik ke menu login mnggunakan link
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($username) {
            if ($user['role_id'] == 1) {
                redirect('admin');
            } elseif ($user['role_id'] == 2) {
                redirect('kepala_dinas');
            } elseif ($user['role_id'] == 3) {
                redirect('p2pm');
            } elseif ($user['role_id'] == 4) {
                redirect('p2ptm');
            } elseif ($user['role_id'] == 5) {
                redirect('kkgm');
            } elseif ($user['role_id'] == 6) {
                redirect('kkko');
            } elseif ($user['role_id'] == 7) {
                redirect('yankes');
            } elseif ($user['role_id'] == 8) {
                redirect('survimun');
            } elseif ($user['role_id'] == 9) {
                redirect('kefarmasian');
            } elseif ($user['role_id'] == 10) {
                redirect('ppm');
            } elseif ($user['role_id'] == 11) {
                redirect('sdmspk');
            } elseif ($user['role_id'] == 12) {
                redirect('guest'); //diarhkan ke method index guest
            }
        }


        //rules utk form input
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //query kan dlu
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'role_id' => $user['role_id']
            ];
            //jika lolos masukkan ke session
            $this->session->set_userdata($data);

            //lalu cek role
            if ($user['role_id'] == 1) {
                redirect('admin'); //diarahkan ke method index admin
            } elseif ($user['role_id'] == 3) {
                redirect('p2pm'); //diarhkan ke method index p2pm
            } elseif ($user['role_id'] == 4) {
                redirect('p2ptm'); //diarhkan ke method index p2ptm
            } elseif ($user['role_id'] == 5) {
                redirect('kkgm'); //diarhkan ke method index kkgm
            } elseif ($user['role_id'] == 6) {
                redirect('kkko'); //diarhkan ke method index kkko
            } elseif ($user['role_id'] == 7) {
                redirect('yankes'); //diarhkan ke method index kkko
            } elseif ($user['role_id'] == 8) {
                redirect('survimun'); //diarhkan ke method index survimun
            } elseif ($user['role_id'] == 9) {
                redirect('kefarmasian'); //diarhkan ke method index kefarmasian
            } elseif ($user['role_id'] == 10) {
                redirect('ppm'); //diarhkan ke method index ppm
            } elseif ($user['role_id'] == 11) {
                redirect('sdmspk'); //diarhkan ke method index sdmspk
            } elseif ($user['role_id'] == 12) {
                redirect('guest'); //diarhkan ke method index guest
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password/Username Salah</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Keluar! </div>');
        redirect('auth');
    }

    // public function blocked()
    // {
    //     $this->session->userdata('username');
    //     $this->load->view('auth/blocked');
    // }
}
