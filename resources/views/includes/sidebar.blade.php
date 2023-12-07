<aside class="main-sidebar sidebar-light-navy border-right">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="https://media.istockphoto.com/id/1141244133/id/vektor/perbaikan-komputer-logo-komputer-digital-vektor-layanan-perbaikan-simbol.jpg?s=170667a&w=0&k=20&c=qi2rBC4ZP8h5SqAVlGBHlrJxkYJQlyA9dzoogLLpDm4=" alt="Logo" class="brand-image img-circle" />
        <span class="brand-text font-weight-light font-weight-bold">A&H - Tekhnik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (auth()->user()->role == 'ADMIN')
                <li class="nav-item">
                    <a href="/service-order" class="nav-link {{ Request::is('service-order') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>Service Orders</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/report" class="nav-link {{ Request::is('report') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Report Orders</p>
                    </a>
                </li>
                @if (auth()->user()->role == 'ADMIN')
                <li class="nav-item">
                    <a href="/invoice" class="nav-link {{ Request::is('invoice') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>Invoice</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- <i class="right fas fa-angle-left"></i> -->

<!-- <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="/report" class="nav-link {{ Request::is('report') ? 'active' : '' }}">
            <i class="fas fa-circle text-warning nav-icon"></i>
            <p>All Orders</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-circle text-info nav-icon"></i>
            <p>Progress</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-circle text-success nav-icon"></i>
            <p>Success</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-circle text-danger nav-icon"></i>
            <p>Pending</p>
        </a>
    </li>
</ul> -->
