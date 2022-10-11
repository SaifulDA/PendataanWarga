<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function login()
    {
        $data['title'] = 'Login';

        $this->load->view('layouts/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('layouts/auth_footer');
    }

    public function login_warga()
    {
        $data['title'] = 'Login Warga';

        $this->load->view('layouts/auth_header', $data);
        $this->load->view('auth/login_warga');
        $this->load->view('layouts/auth_footer');
    }

    public function register()
    {
        $data['title'] = 'Register';

        $this->load->view('layouts/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('layouts/auth_footer');
    }

    public function proses_login_warga()
    {
        $this->form_validation->set_rules('nik_warga', 'NIK Warga', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login Gagal</div>');
            redirect('auth/login_warga');
        } else {
            $nik_warga = $this->input->post('nik_warga');
            $password = $this->input->post('password');

            $warga = $this->WargaModel->cekData(['nik_warga' => $nik_warga])->row_array();

            if ($warga) {
                if ($password == $warga['tanggal_lahir']) {
                    $data = [
                        'nik_warga' => $warga['nik_warga'],
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                    <strong>Selamat Datang! </strong>' . $warga['nama_warga'] . '
                  </div>');
                    redirect('dashboard/index_warga');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Login Gagal</div>');
                    redirect('auth/login_warga');
                }
            }
        }
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Login Gagal</div>');
            redirect('auth/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->UserModel->cekData(['email' => $email])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'status' => $user['status']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['status'] == 'Admin') {
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <strong>Selamat Datang! </strong> ' . $user['nama'] . '
                      </div>');
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Login Gagal</div>');
                    redirect('auth/login');
                }
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password tidak sama'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';

            $this->load->view('layouts/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('layouts/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'status' => 'Admin',
            ];

            // var_dump($data);
            // die;

            $this->UserModel->insertData($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil dibuat</div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout</div>');
        redirect('auth/login');
    }
}
