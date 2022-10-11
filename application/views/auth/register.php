    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>assets/vendor/AdminLTE-3.1.0/index2.html" class="h1"><b>Hello</b>World</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Register</p>
                <div class="container">
                </div>

                <form action="<?= base_url() ?>auth/registration" method="post">
                    <div class="input-group <?= form_error('nama') ? '' : 'mb-3' ?>">
                        <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" placeholder="Full name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group <?= form_error('username') ? '' : 'mb-3' ?>">
                        <input type="text" name="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group <?= form_error('email') ? '' : 'mb-3' ?>">
                        <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group <?= form_error('password1') ? '' : 'mb-3' ?>">
                        <input type="password" name="password1" class="form-control <?= form_error('password1') ? 'is-invalid' : '' ?>" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group <?= form_error('password2') ? '' : 'mb-3' ?>">
                        <input type="password" name="password2" class="form-control <?= form_error('password2') ? 'is-invalid' : '' ?>" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <a href="<?= base_url() ?>auth/login">Sudah punya akun ?</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->