<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Warga</h1>
                        <?php $this->session->flashdata('message') ?>
                        <?= validation_errors(); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row-lg">
                    <div class="col-md-6">
                        <form action="<?= base_url() ?>warga/proses_tambah" method="post">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIK Warga</label>
                                        <input type="number" name="nik_warga" class="form-control" id="exampleFormControlInput1" autocomplete="off" maxlength="16" value="243000">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Warga</label>
                                        <input type="text" name="nama_warga" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten / Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Negara</label>
                                        <input type="text" name="negara" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT / RW</label>
                                        <input type="text" name="rt_rw" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label">Agama</label>
                                        <select class="form-control" name="agama">
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="KRISTEN">KRISTEN</option>
                                            <option value="BUDDHA">BUDDHA</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="KONGHUCU">KONGHUCU</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                                        <select class="form-control" name="pendidikan_terakhir">
                                            <option value="SD / SEDERAJAT">SD / SEDERAJAT</option>
                                            <option value="SMP / SEDERAJAT">SMP / SEDERAJAT</option>
                                            <option value="SMA / SEDERAJAT">SMA / SEDERAJAT</option>
                                            <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                            <option value="DIPLOMA III">DIPLOMA III</option>
                                            <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                            <option value="STRATA II">STRATA II</option>
                                            <option value="STRATA III">STRATA III</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
                                        <select class="form-control" name="status_perkawinan">
                                            <option value="KAWIN">KAWIN</option>
                                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Warga</label>
                                        <select class="form-control" name="status_warga">
                                            <option value="KONTRAK">KONTRAK</option>
                                            <option value="TETAP">TETAP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah data</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
</div>