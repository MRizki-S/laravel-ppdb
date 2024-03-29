<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">SMK JOMBANG</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item
    {{-- {{ Request::is('dashboard') ? 'active' : '' }} --}}
    ">
        <a class="nav-link" href="/dashboard
        {{-- {{route('dashboard')}} --}}
        ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Infomations PPDB
    </div>

    <!-- Nav Item - Data ppdb -->
    <li class="nav-item {{ Request::is('/data-ppdb') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/data-ppdb') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data PPDB</span></a>
    </li>

    <!-- Nav Item - add data ppdb -->
    <li class="nav-item {{ Request::is('dashboard/guru') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/guru">
            {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
            <i class="fas fa-solid fa-file-circle-plus"></i>
            <span>Add Data PPDB</span></a>
    </li>

    <li class="nav-item {{ Request::is('dashboard/guru') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/guru">
            <i class="fas fa-fw fa-table"></i>
            <span>Jurusan </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
