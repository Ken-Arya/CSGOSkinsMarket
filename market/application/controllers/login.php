<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login'); //password = praktikum
        if (isset($_POST['submit'])) {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->session->set_userdata('login', '1');
                $this->session->set_userdata('username', $user['username']);
                $this->session->set_userdata('password', $user['password']);
                redirect('market');
            }
        } else {
            redirect('login');
        }
    }
}