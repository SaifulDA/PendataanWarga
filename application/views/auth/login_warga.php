<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>FORM LOGIN WARGA</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Gunakkan NIK sebagai username dan Tanggal lahir sebagai password.    FORMAT PASSWORD : TAHUN-BULAN-TANGGAL</p>
            <div class="container">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <form action="<?= base_url() ?>auth/proses_login_warga" method="post">
                <div class="input-group mb-3">
                    <input type="number" name="nik_warga" class="form-control <?= form_error('nik_warga') ? 'is-invalid' : '' ?>" placeholder="NIK" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <a href="<?= base_url() ?>auth/login">Login sebagai admin</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->