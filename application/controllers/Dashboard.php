<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'WargaModel');
        is_logged_in();
    }

    public function index()
    {
        $user = $this->UserModel->cekData(['email' => $this->session->userdata('email')])
            ->row_array();
        $data = [
            'nama' => $user['nama'],
            'username' => $user['username'],
            'status' => $user['status'],
            'jumlah_warga' => $this->WargaModel->countAll(),
            'perempuan' => $this->WargaModel->countJenisKelamin('perempuan'),
            'laki_laki' => $this->WargaModel->countJenisKelamin('laki-laki'),
            'title' => 'Dashboard'
        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('layouts/footer');
    }

    public function berita()
    {
        $user = $this->UserModel->cekData(['email' => $this->session->userdata('email')])
            ->row_array();
        $data = [
            'nama' => $user['nama'],
            'username' => $user['username'],
            'status' => $user['status'],
            'title' => 'Berita'
        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dashboard/berita', $data);
        $this->load->view('layouts/footer');
    }

    public function index_warga()
    {
        $user = $this->WargaModel->cekData(['nik_warga' => $this->session->userdata('nik_warga')])
            ->row_array();
        $data = [
            'nama_warga' => $user['nama_warga'],
            'title' => 'Dashboard Warga'
        ];

        $this->load->view('templates_warga/header', $data);
        $this->load->view('templates_warga/navbar');
        $this->load->view('templates_warga/sidebar', $data);
        $this->load->view('dashboard/index_warga', $data);
        $this->load->view('templates_warga/footer');
    }

    public function profile_warga()
    {
        $warga = $this->WargaModel->cekData(['nik_warga' => $this->session->userdata('nik_warga')])
            ->row_array();
        $data = [
            'nama_warga' => $warga['nama_warga'],
            'nik_warga' => $warga['nik_warga'],
            'tempat_lahir' => $warga['tempat_lahir'],
            'tanggal_lahir' => $warga['tanggal_lahir'],
            'jenis_kelamin' => $warga['jenis_kelamin'],
            'alamat' => $warga['alamat'],
            'kelurahan' => $warga['kelurahan'],
            'kecamatan' => $warga['kecamatan'],
            'kabupaten_kota' => $warga['kabupaten_kota'],
            'provinsi' => $warga['provinsi'],
            'negara' => $warga['negara'],
            'rt_rw' => $warga['rt_rw'],
            'agama' => $warga['agama'],
            'pendidikan_terakhir' => $warga['pendidikan_terakhir'],
            'status_perkawinan' => $warga['status_perkawinan'],
            'status_warga' => $warga['status_warga'],
            'pekerjaan' => $warga['pekerjaan'],
            'title' => 'Profile Warga'
        ];

        $this->load->view('templates_warga/header', $data);
        $this->load->view('templates_warga/navbar');
        $this->load->view('templates_warga/sidebar', $data);
        $this->load->view('dashboard/profile_warga', $data);
        $this->load->view('templates_warga/footer');
    }

    public function profile()
    {
        $user = $this->UserModel->cekData(['email' => $this->session->userdata('email')])
            ->row_array();
        $data = [
            'nama' => $user['nama'],
            'id' => $user['id'],
            'status' => $user['status'],
            'username' => $user['username'],
            'created_at' => $user['created_at'],
            'title' => 'My Profile'
        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dashboard/my_profile', $data);
        $this->load->view('layouts/footer');
    }

    public function edit_profile($id)
    {
        $user = $this->UserModel->cekData(['email' => $this->session->userdata('email')])
            ->row_array();
        $data = [
            'nama' => $user['nama'],
            'id' => $id,
            'status' => $user['status'],
            'username' => $user['username'],
            'created_at' => $user['created_at'],
            'title' => 'Edit Profile'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/navbar');
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('dashboard/edit_profile', $data);
            $this->load->view('layouts/footer');
        } else {
            $this->UserModel->editUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil! </strong> edit data user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('dashboard/profile');
        }
    }
}
