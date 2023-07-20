<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(#0818AA, #3C4CE0);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <img src="{{ url('assets/img/logo kantor camat.png') }}" width="35" alt="">
        <div class="sidebar-brand-text mx-3 mt-4"><p style="font-size: 10px; marging-top: 5px; color:rgb(236, 217, 43);;"><span style="font-size: 10px">Pengarsipan Surat</span> <br> Kecamatan Medan Amplas</p></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Surat Masuk -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/surat-masuk*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('surat-masuk.index') }}">
            <img src="{{ url('assets/img/surat.png') }}" width="20px" alt="">
            <span class="fs-6">Surat Masuk</span></a>
    </li>

    <!-- Nav Item - Surat Keluar -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/surat-keluar*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('surat-keluar.index') }}">
            <img src="{{ url('assets/img/surat.png') }}" width="20px" alt="">
            <span class="fs-6">Surat Keluar</span></a>
    </li>

    <!-- Nav Item - Galeri -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/galeri*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('galeri.index') }}">
            <img src="{{ url('assets/img/picture.png') }}" width="20px" alt="">
            <span class="fs-6">Galeri</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/cetak-laporan*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('data') }}">
            <img src="{{ url('assets/img/paper.png') }}" width="20px" alt="">
            <span class="fs-6">Laporan</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading mt-2">
        Setting
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <img src="{{ url('assets/img/gear.png') }}" width="20px" alt="">
            <span class="fs-6">Setting</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('akun.index') }}">Akun</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>