<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $user = $this->UserModel->cekData(['email' => $this->session->userdata('email')])
            ->row_array();
        $data = [
            'nama' => $user['nama'],
            'status' => $user['status'],
            'username' => $user['username'],
            'created_at' => $user['created_at'],
            'pengurus' => $this->UserModel->countAllUser(),
            'user' => $this->UserModel->getUser()->result(),
            'title' => 'Daftar Pengurus'
        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('pengurus/index', $data);
        $this->load->view('layouts/footer');
    }
}
