<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }

    public function index()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }


    //method utk menambah user
    public function manageUser()
    {
        $data['title'] = 'Manage User';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['usertampil'] = $this->User_model->getuser();
        $data['roletampil'] = $this->db->get('name_role')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/manage-user', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'image' => $this->input->post('image'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Baru Berhasil Ditambahkan!</div>');
            redirect('admin/manageUser'); //lari ke folder menu lalu ke file submenu yg ada di views
        }
    }

    public function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'Username telah digunakan');
        if ($this->User_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($username)
    {
        $this->User_model->deleteUser($username);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun berhasil Dihapus</div>');
        redirect('admin/manageuser');
    }

    public function resetUser($username)
    {
        $this->User_model->resetUser($username);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil di reset!</div>');
        redirect('admin/manageuser');
    }

    public function edit($id)
    {
        $this->User_model->editUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil di sunting</div>');
        redirect('admin/manageuser');
    }

    public function changePassword()
    {
        //mengambil data pada session di Auth.php
        $data['title'] = 'Change Password';
        //get data user di db yg tersimpan saat login pada session auth.php
        $username = $this->input->post('username');
        $data['user'] = $this->db->get_where('user', ['username' => $username])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            //memanggil tiap halaman pada file views -> user
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/manageuser', $data);
            $this->load->view('templates/footer');
        } else {

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi Salah</div>');
                redirect('admin/manageuser');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi tidak boleh sama</div>');
                    redirect('admin/manageuser');
                } else {
                    //jika password berhasil di ganti
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $username);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kata sandi berhasil diubah</div>');
                    redirect('admin/manageuser');
                }
            }
        }
    }
}
