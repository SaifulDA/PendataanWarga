<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3" style="color:black ;">My Profile</h1>
                        <?= $this->session->flashdata('message'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container ml-2 mt-2">
            <div class="card col-lg-7 bg-lightblue">
                <div class="row no-gutters ">
                    <div class="col-md-8 d-flex ">
                        <div class="card-body flex-column">
                            <h3 class="card-title" style="font-size: 28px;"><?= $nama; ?></h3>
                            <p class="card-text" style="font-size: 22px;"><span class="badge bg-danger"><?= $status; ?></span></p>
                            <p class="card-text text-dark">Created at : <?= $created_at; ?></p>
                            <a href="<?= base_url('dashboard/edit_profile/' . $id) ?>" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</div>