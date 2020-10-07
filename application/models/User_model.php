<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_model
{
    public function getUser()
    {
        $query = "SELECT `user`.*,`name_role`.`role`
                    FROM `user` JOIN `name_role`
                    ON `user`.`role_id` = `name_role`.`id` 
        ";

        return $this->db->query($query)->result_array();
    }

    public function deleteUser($username)
    {
        $this->db->delete('user', ['username' => $username]);
    }

    public function resetUser($username)
    {
        //$data = ['password' => 1234];
        $password_hash = password_hash(1234, PASSWORD_DEFAULT);

        $this->db->set('password', $password_hash);
        $this->db->where('username', $username);
        $this->db->update('user');
    }

    public function editUser($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id')
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }


    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
