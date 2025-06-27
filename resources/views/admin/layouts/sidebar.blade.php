<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Yufa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Massage -->
                <li class="nav-item">
                    <a href="/admin/massage" class="nav-link {{ Request::is('admin/massage*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Massage</p>
                    </a>
                </li>

                <!-- Users -->
                <li class="nav-item">
                    <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>

                <!-- Content Management -->
                <li class="nav-item {{ Request::is('admin/slider*') || Request::is('admin/product*') || Request::is('admin/service*') || Request::is('admin/about*') || Request::is('admin/news*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/slider*') || Request::is('admin/product*') || Request::is('admin/service*') || Request::is('admin/about*') || Request::is('admin/news*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Content Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/slider" class="nav-link {{ Request::is('admin/slider*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/product" class="nav-link {{ Request::is('admin/product*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/service" class="nav-link {{ Request::is('admin/service*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/about" class="nav-link {{ Request::is('admin/about*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/news" class="nav-link {{ Request::is('admin/news*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/highlight" class="nav-link {{ Request::is('admin/highlight*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Highlight</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
