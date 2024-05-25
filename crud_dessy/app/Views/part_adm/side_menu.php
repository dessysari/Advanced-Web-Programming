<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url('template/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JualBuku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('template/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" 
            data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kategori" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Kategori
                    </p>
                    </a>
                </li>

                <?php
                    if (session()->get('hak_akses') == 'admin') {
                ?>
                <li class="nav-item">
                    <a href="<?= base_url('kategori'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('barang'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Barang
                        </p>
                    </a>
                </li>
                <?php
                    }
                ?>
                <li class="nav-item">
                    <a href="<?= base_url('Login/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>