<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survimun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Table_model');
        is_logged_in();
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('indikator[]', 'Indikator', 'required');
        $this->form_validation->set_rules('sasaran[]', 'Sasaran', 'required');
        $this->form_validation->set_rules('target[]', 'Target', 'required');
        $this->form_validation->set_rules('bulan_1[]', 'Bulan 1', 'required');
        $this->form_validation->set_rules('bulan_2[]', 'Bulan 2', 'required');
        $this->form_validation->set_rules('bulan_3[]', 'Bulan 3', 'required');
        $this->form_validation->set_rules('bulan_4[]', 'Bulan 4', 'required');
        $this->form_validation->set_rules('bulan_5[]', 'Bulan 5', 'required');
        $this->form_validation->set_rules('bulan_6[]', 'Bulan 6', 'required');
        $this->form_validation->set_rules('bulan_7[]', 'Bulan 7', 'required');
        $this->form_validation->set_rules('bulan_8[]', 'Bulan 8', 'required');
        $this->form_validation->set_rules('bulan_9[]', 'Bulan 9', 'required');
        $this->form_validation->set_rules('bulan_10[]', 'Bulan 10', 'required');
        $this->form_validation->set_rules('bulan_11[]', 'Bulan 11', 'required');
        $this->form_validation->set_rules('bulan_12[]', 'Bulan 12', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masukkan Data Surveilands dan Imunisasi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('survimun/index');
            $this->load->view('templates/footer');
        } else {
            $indikator = $this->input->post('indikator[]');
            $sasaran =  $this->input->post('sasaran[]');
            $target =  $this->input->post('target[]');
            $bulan_1 =  $this->input->post('bulan_1[]');
            $bulan_2 = $this->input->post('bulan_2[]');
            $bulan_3 = $this->input->post('bulan_3[]');
            $bulan_4 = $this->input->post('bulan_4[]');
            $bulan_5 = $this->input->post('bulan_5[]');
            $bulan_6 = $this->input->post('bulan_6[]');
            $bulan_7 = $this->input->post('bulan_7[]');
            $bulan_8 = $this->input->post('bulan_8[]');
            $bulan_9 = $this->input->post('bulan_9[]');
            $bulan_10 = $this->input->post('bulan_10[]');
            $bulan_11 = $this->input->post('bulan_11[]');
            $bulan_12 = $this->input->post('bulan_12[]');
            $tahun  = $this->input->post('tahun[]');
            $index = 0;
            foreach ($indikator as $i) {
                array_push($data = [
                    'indikator' => $i,
                    'sasaran' => $sasaran[$index],
                    'target' => $target[$index],
                    'bulan_1' => $bulan_1[$index],
                    'bulan_2' => $bulan_2[$index],
                    'bulan_3' => $bulan_3[$index],
                    'bulan_4' => $bulan_4[$index],
                    'bulan_5' => $bulan_5[$index],
                    'bulan_6' => $bulan_6[$index],
                    'bulan_7' => $bulan_7[$index],
                    'bulan_8' => $bulan_8[$index],
                    'bulan_9' => $bulan_9[$index],
                    'bulan_10' => $bulan_10[$index],
                    'bulan_11' => $bulan_11[$index],
                    'bulan_12' => $bulan_12[$index],
                    'tahun' => $tahun[$index]
                ]);
                $index++;
                $this->db->insert('survimun', $data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('survimun'); //lari ke folder menu lalu ke file submenu yg ada di views

        }
    }

    public function edit($id)
    {
        $this->Table_model->Editsurvimun($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('survimun/table');
    }

    public function deleteDataByYear()
    {
        $tahun = $this->input->post('tahun');
        $this->db->delete('survimun', ['tahun' => $tahun]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('survimun/table');
    }

    public function deleteDataById($id)
    {
        $this->db->delete('survimun', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('survimun/table');
    }

    public function table()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['table'] = $this->Table_model->getTablesurvimun();

        $data['title'] = 'Data Surveilands dan Imunisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('survimun/table');
        $this->load->view('templates/footer');
    }

    public function chart()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['title'] = 'Grafik Surveilands dan Imunisasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('survimun/chart');
        $this->load->view('templates/footer');
    }

    public function changePassword()
    {
        //mengambil data pada session di Auth.php
        $data['title'] = 'Change Password';
        //get data user di db yg tersimpan saat login pada session auth.php
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            //memanggil tiap halaman pada file views -> user
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('survimun/changepassword', $data);
            $this->load->view('templates/footer');
        } else {

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('survimun/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password Cant same</div>');
                    redirect('survimun/changepassword');
                } else {
                    //jika password berhasil di ganti
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Change</div>');
                    redirect('survimun/changepassword');
                }
            }
        }
    }
}
