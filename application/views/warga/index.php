<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-black">Data Warga</h1>
                        <a href="<?= base_url() ?>warga/tambah" class="btn btn-primary mt-2 mb-3">Tambah Data Warga</a>
                        <?= $this->session->flashdata('message') ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card-body" style="padding:1px 10px 10px 10px;">
            <table id="example2" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>NEGARA</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <?php foreach ($warga as $row) { ?>
                    <tbody>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $row['nik_warga']; ?></td>
                            <td><?= $row['nama_warga']; ?></td>
                            <td><?= $row['negara']; ?></td>
                            <td>
                                <a href="<?= base_url('warga/hapus_warga/' . $row['id_warga']) ?>" class="badge bg-danger btn-hapus">Hapus Data</a>
                                <a href="<?= base_url('warga/edit_warga/' . $row['id_warga']) ?>" class="badge bg-warning">Edit Data</a>
                            </td>
                    </tbody>
                <?php } ?>
            </table>
           
        </div>

        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
</div>