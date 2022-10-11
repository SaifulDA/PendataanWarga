<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My Profile</h1>
                        <a href="<?= base_url() ?>laporan/cetak_laporan_profile_warga" class="btn btn-danger mt-2"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
                        <?= $this->session->flashdata('message'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container ml-2 mt-2">
            <ul class="list-group">
                <li class="list-group-item">NAMA : <?= $nama_warga; ?></li>
                <li class="list-group-item">NIK : <?= $nik_warga; ?></li>
                <li class="list-group-item">TEMPAT LAHIR : <?= $tempat_lahir; ?></li>
                <li class="list-group-item">TANGGAL LAHIR : <?= $tanggal_lahir; ?></li>
                <li class="list-group-item">JENIS KELAMIN: <?= $jenis_kelamin; ?></li>
                <li class="list-group-item">ALAMAT : <?= $alamat; ?></li>
                <li class="list-group-item">KELURAHAN : <?= $kelurahan; ?></li>
                <li class="list-group-item">KECAMATAN : <?= $kecamatan; ?></li>
                <li class="list-group-item">KABUPATEN KOTA : <?= $kabupaten_kota; ?></li>
                <li class="list-group-item">PROVINSI : <?= $provinsi; ?></li>
                <li class="list-group-item">NEGARA : <?= $negara; ?></li>
                <li class="list-group-item">RT/RW : <?= $rt_rw; ?></li>
                <li class="list-group-item">AGAMA : <?= $agama; ?></li>
                <li class="list-group-item">PENDIDIKAN TERAKHIR : <?= $pendidikan_terakhir; ?></li>
                <li class="list-group-item">STATUS PERKAWINAN : <?= $status_perkawinan; ?></li>
                <li class="list-group-item">STATUS WARGA : <?= $status_warga; ?></li>
                <li class="list-group-item">PEKERJAAN : <?= $pekerjaan; ?></li>
            </ul>
        </div>
    </div>
    <!-- /.content-wrapper -->
</div>