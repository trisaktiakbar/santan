<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-seedling"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= $APP_NAME ?></div>
    </a>

    <hr class="sidebar-divider my-0" />

    <li class="nav-item" id="nav-dashboard">
        <a class="nav-link" href="<?= $BASE_URL ?>">
            <i class="fas fa-fw fa-grip-vertical"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider" />

    <div class="sidebar-heading">Media Tanam</div>

    <li class="nav-item" id="nav-data-realtime">
        <a class="nav-link" href="<?= $BASE_URL ?>data-realtime">
            <i class="fas fa-fw fa-clock"></i>
            <span>Data Realtime</span></a>
    </li>

    <li class="nav-item" id="nav-analitik">
        <a class="nav-link" href="<?= $BASE_URL ?>analitik">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Analitik</span></a>
    </li>

    <li class="nav-item" id="nav-laporan">
        <a class="nav-link" href="<?= $BASE_URL ?>laporan">
            <i class="fas fa-fw fa-paste"></i>
            <span>Laporan</span></a>
    </li>

    <hr class="sidebar-divider" />

    <div class="sidebar-heading">Akun</div>

    <li class="nav-item" id="nav-pengaturan">
        <a class="nav-link" href="<?= $BASE_URL ?>pengaturan">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Pengaturan</span></a>
    </li>

    <li class="nav-item" id="nav-log-out">
        <a class="nav-link text-danger" data-toggle="modal" data-target="#logoutModal" href="charts.html">
            <i class="fas fa-sign-out-alt fa-chart-area text-danger"></i>
            <span>Log Out</span>
        </a>
    </li>

    <hr class="sidebar-divider" />

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>