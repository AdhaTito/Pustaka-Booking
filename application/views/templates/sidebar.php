<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebardark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fw fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="color: white">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- MASTER DATA -->

    <!-- Looping Menu-->
    <!-- Heading -->
    <div class="sidebar-heading" style="color: white">
        Master Data
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span style="color: white">Data User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span style="color: white">Kategori Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span style="color: white">Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span style="color: white">Data Anggota</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- TRANSAKSI -->
    <div class="sidebar-heading" style="color: white">
        Transaksi
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span style="color: white">Data Peminjaman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span style="color: white">Data Booking</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- LAPORAN TRANSAKSI -->
    <div class="sidebar-heading" style="color: white">
        Data Laporan
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span style="color: white">Laporan Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span style="color: white">Laporan Data Anggota</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span style="color: white">Laporan peminjaman</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler Sidebar -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --   >