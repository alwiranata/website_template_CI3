<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/dashboard')  ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('Tampilan')  ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - User -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('user/user')  ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span></a>
        </li>
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('Web')  ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Web</span></a>
        </li>
        <hr class="sidebar-divider my-0">


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

    <!-- End of Sidebar -->