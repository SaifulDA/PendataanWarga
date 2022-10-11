<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-primary elevation-4 bg-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light d-flex justify-content-center">Pendataan Warga</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
            <div class="info">
                <a class="d-inline text-light">
                    Login :
                    <?php if (!empty($this->session->userdata('email'))) { ?>
                        <?= $username; ?>
                    <?php } ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>dashboard/profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            My Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>warga" class="nav-link ml-4">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Data Warga</p>
                            </a>
                        </li>
                        <?php if ($status == 'Admin') { ?>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>pengurus" class="nav-link ml-4">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Pengurus</p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>laporan" class="nav-link ml-4">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Laporan Data Warga</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>dashboard/berita" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Daftar Berita
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->