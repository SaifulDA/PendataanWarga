<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6t">
                        <h1 class="m-0 text-black bg-light">Laporan Data Warga</h1>
                        <a href="<?= base_url() ?>laporan/cetak_laporan" class="btn btn-danger text-light mt-2"><i class="fas fa-file-pdf text-light"></i> Cetak PDF</a>
                        <div class="mt-3">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="table-responsive-md bg-light">
            <table class="table ml-3 bg-light" border="3">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">TEMPAT LAHIR</th>
                        <th scope="col">TANGGAL LAHIR</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">KELURAHAN</th>
                        <th scope="col">KECAMATAN</th>
                        <th scope="col">KABUPATEN KOTA</th>
                        <th scope="col">PROVINSI</th>
                        <th scope="col">NEGARA</th>
                        <th scope="col">RT/RW</th>
                        <th scope="col">AGAMA</th>
                        <th scope="col">PENDIDIKAN TERAKHIR</th>
                        <th scope="col">STATUS PERKAWINAN</th>
                        <th scope="col">STATUS WARGA</th>
                        <th scope="col">PEKERJAAN</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($warga as $row) { ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $row['nik_warga']; ?></td>
                            <td><?= $row['nama_warga']; ?></td>
                            <td><?= $row['tempat_lahir']; ?></td>
                            <td><?= $row['tanggal_lahir']; ?></td>
                            <td><?= $row['jenis_kelamin']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['kelurahan']; ?></td>
                            <td><?= $row['kecamatan']; ?></td>
                            <td><?= $row['kabupaten_kota']; ?></td>
                            <td><?= $row['provinsi']; ?></td>
                            <td><?= $row['negara']; ?></td>
                            <td><?= $row['rt_rw']; ?></td>
                            <td><?= $row['agama']; ?></td>
                            <td><?= $row['pendidikan_terakhir']; ?></td>
                            <td><?= $row['status_perkawinan']; ?></td>
                            <td><?= $row['status_warga']; ?></td>
                            <td><?= $row['pekerjaan']; ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
</div>