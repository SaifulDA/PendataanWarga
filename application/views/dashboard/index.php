    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-light">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="color:black">Dashboard</h1>
                            <?= $this->session->flashdata('message'); ?>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3><?= $jumlah_warga; ?></h3>
                                    <p>Jumlah Warga</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $perempuan; ?></h3>
                                    <p>Warga Perempuan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-female"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $laki_laki; ?></h3>
                                    <p>Warga Laki-Laki</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-male"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
    </div>