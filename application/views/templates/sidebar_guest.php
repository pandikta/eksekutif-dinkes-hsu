<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-lg-1,5" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=" fas fa-chalkboard-teacher"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="padding-right: 5%;">Eksekutif Dinkes HSU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">





    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Tabel</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="<?= base_url('guest/tb_p2pm') ?>">P2PM</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_p2ptm') ?>">P2PTM</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_kkko') ?>">KKKO</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_kefarmasian') ?>">Kefarmasian</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_yankes') ?>">Yankes</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_survimun') ?>">Survimun</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_sdmspk') ?>">SDMSPK</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_ppm') ?>">PPM</a>
                <a class="collapse-item" href="<?= base_url('guest/tb_kkgm') ?>">KKGM</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Grafik</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="<?= base_url('guest/chart_p2pm') ?>">P2PM</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_p2ptm') ?>">P2PTM</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_kkko') ?>">KKKO</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_kefarmasian') ?>">Kefarmasian</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_yankes') ?>">Yankes</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_survimun') ?>">Survimun</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_sdmspk') ?>">SDMSPK</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_ppm') ?>">PPM</a>
                <a class="collapse-item" href="<?= base_url('guest/chart_kkgm') ?>">KKGM</a>
            </div>
        </div>
    </li>






    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->