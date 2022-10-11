<?php
require_once 'vendor/autoload.php';

defined('BASEPATH') or exit('No direct script access allowed');

class DataFaker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WargaModel');
    }

    public function index()
    {
        $faker = Faker\Factory::create('id_ID');

        for ($i = 0; $i < 35; $i++) {
            $data = [
                'nik_warga' => '243000' . random_string('numeric', 10),
                'nama_warga' => $faker->name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', 'now'),
                'jenis_kelamin' => $faker->randomElement(['LAKI-LAKI', 'PEREMPUAN']),
                'alamat' => $faker->address,
                'kelurahan' => $faker->streetName,
                'kecamatan' => $faker->citySuffix,
                'kabupaten_kota' => $faker->city,
                'provinsi' => $faker->state,
                'negara' => 'Indonesia',
                'rt_rw' => $faker->randomElement(['002/003', '009/012', '013/009', '010/001', '011/008']),
                'agama' => $faker->randomElement(['ISLAM', 'KRISTEN', 'HINDU', 'BUDDHA', 'KONGHUCU']),
                'pendidikan_terakhir' => $faker->randomElement(['SD / SEDERAJAT', 'SMP / SEDERAJAT', 'SMA / SEDERAJAT', 'DIPLOMA I / II', 'DIPLOMA III', 'DIPLOMA IV / STRATA I', 'STRATA II', 'STRATA III']),
                'status_perkawinan' => $faker->randomElement(['KAWIN', 'BELUM KAWIN']),
                'status_warga' => $faker->randomElement(['TETAP', 'KONTRAK']),
                'pekerjaan' => $faker->jobTitle,
            ];

            $this->WargaModel->insertData($data);
        }
    }
}
