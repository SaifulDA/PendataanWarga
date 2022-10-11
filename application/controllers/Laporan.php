<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Laporan_model');
        $this->load->library('pdf');
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
            'warga' => $this->WargaModel->getWarga()->result_array(),
            'title' => 'Laporan Data Warga'
        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('laporan/laporan_warga', $data);
        $this->load->view('layouts/footer');
    }

    public function cetak_laporan()
    {
        $data = [
            'warga' => $this->WargaModel->getWarga()->result_array(),
            'title' => 'Laporan Data Warga'
        ];

        $this->load->view('laporan/cetak_laporan_pdf', $data);
        $paper_size = 'A2';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("laporan_warga.pdf", array('Attachment' => 0));
    }

    public function cetak_laporan_profile_warga()
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
            'title' => 'Cetak Profile Warga'
        ];

        $this->load->view('laporan/cetak_laporan_warga_pdf', $data);
        $paper_size = 'A2';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("laporan_profil_warga.pdf", array('Attachment' => 0));
    }
}
