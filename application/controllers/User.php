<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        check_not_login();

        $this->load->model('M_user');
        $data['row'] = $this->M_user->get();
        $this->template->load('template', 'user/datauser', $data);
        ;
    }

    public function add_user()
    {
        print_r($_POST['username']);
        $this->template->load('template', 'user/vadd_user');
    }
}