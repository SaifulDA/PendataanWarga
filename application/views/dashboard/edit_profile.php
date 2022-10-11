<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-black">Edit Profile</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container ml-2 mt-2">
            <div class="container mt-2">
                <div class="row">
                    <?= validation_errors(); ?>
                    <form action="" method="POST" class="form-group">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama User</label>
                            <input type="text" class="form-control bg-light col-6" value="<?= $nama; ?>" name="nama" id="exampleFormControlInput1" placeholder="Masukkan Nama..">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control bg-light col-6" value="<?= $username; ?>" name="username" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <button class="btn btn-primary" type="submit">Ubah data</button>
                        <a href="<?= base_url() ?>dashboard/profile" class="btn btn-danger text-white">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</div>