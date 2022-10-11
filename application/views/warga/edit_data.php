<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Warga</h1>
                        <?= $this->session->flashdata('message') ?>
                        <?= validation_errors(); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row-lg">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <input type="hidden" name="id_warga" value="<?= $warga['id_warga']; ?>">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIK Warga</label>
                                        <input type="number" name="nik_warga" class="form-control" id="exampleFormControlInput1" autocomplete="off" maxlength="16" value="<?= $warga['nik_warga']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Warga</label>
                                        <input type="text" name="nama_warga" class="form-control" id="exampleFormControlInput1" value="<?= $warga['nama_warga']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" value="<?= $warga['tempat_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" value="<?= $warga['tanggal_lahir']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <?php foreach ($jenis_kelamin as $j) : ?>
                                                <?php if ($j == $warga['jenis_kelamin']) : ?>
                                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" value="<?= $warga['alamat']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control" id="exampleFormControlInput1" value="<?= $warga['kelurahan']; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="exampleFormControlInput1" value="<?= $warga['kecamatan']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten / Kota</label>
                                        <input type="text" name="kabupaten_kota" class="form-control" id="exampleFormControlInput1" value="<?= $warga['kabupaten_kota']; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" id="exampleFormControlInput1" value="<?= $warga['provinsi']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Negara</label>
                                        <input type="text" name="negara" class="form-control" id="exampleFormControlInput1" value="<?= $warga['negara']; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT / RW</label>
                                        <input type="text" name="rt_rw" class="form-control" id="exampleFormControlInput1" value="<?= $warga['rt_rw']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label">Agama</label>
                                        <select class="form-control" name="agama">
                                            <?php foreach ($agama as $a) : ?>
                                                <?php if ($a == $warga['agama']) : ?>
                                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                                        <select class="form-control" name="pendidikan_terakhir">
                                            <?php foreach ($pendidikan_terakhir as $pt) : ?>
                                                <?php if ($pt == $warga['pendidikan_terakhir']) : ?>
                                                    <option value="<?= $pt; ?>" selected><?= $pt; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $pt; ?>"><?= $pt; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
                                        <select class="form-control" name="status_perkawinan">
                                            <?php foreach ($status_perkawinan as $sp) : ?>
                                                <?php if ($sp == $warga['status_perkawinan']) : ?>
                                                    <option value="<?= $sp; ?>" selected><?= $sp; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $sp; ?>"><?= $sp; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status Warga</label>
                                        <select class="form-control" name="status_warga">
                                            <?php foreach ($status_warga as $sw) : ?>
                                                <?php if ($sw == $warga['status_warga']) : ?>
                                                    <option value="<?= $sw; ?>" selected><?= $sw; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $sw; ?>"><?= $sw; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1" value="<?= $warga['pekerjaan']; ?>">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Edit data</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
</div>