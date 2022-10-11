<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-light">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-black">Daftar Pengurus</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?= $pengurus; ?></h3>
                                <p>Jumlah Pengurus</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container ml-2 mt-4">
            <div class="row">
                <?php foreach ($user as $row) { ?>
                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row->nama; ?></h5><br>
                                <h6 class="card-subtitle mb-2 badge bg-red" style="font-size: 15px;"><?= $row->status; ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $row->created_at; ?></h6>
                                <p class="card-text">Pengurus Pendataan Warga Kampung Tahun 2022</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</div>