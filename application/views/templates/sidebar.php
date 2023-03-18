<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-fw  fa-regular fa-envelope"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengarsipan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Tables -->

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Surat_masuk'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Surat Masuk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Surat_keluar'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Surat Keluar</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Instansi'); ?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Instansi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Perusahaan'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Perusahaan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->