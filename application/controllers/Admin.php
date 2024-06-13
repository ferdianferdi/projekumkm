<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('M_user');
            $query = $this->M_user->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'iduser' => $row->id_user,
                    'posisiuser' => $row->posisi_user
                );
                $this->session->set_userdata($params);
                echo "<script>
                        alert('login behasil');
                        window.location='" . site_url('dashboard') . "';
                    </script>";
            } else {
                $this->session->set_userdata($params);
                echo "<script>
                        alert('login gagal');
                        window.location='" . site_url('admin/login') . "';
                    </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('iduser', 'posisiuser');
        $this->session->unset_userdata($params);
        redirect('admin/login');
    }

}