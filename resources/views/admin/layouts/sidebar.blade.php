<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGASI UTAMA</li>
            <li class="active">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @auth
            <li>
                <a href="{{ url('/admin/token') }}">
                    <i class="fa fa-th"></i> <span>Pembuatan Token Halaman</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/listtoken') }}">
                    <i class="fa fa-edit"></i> <span>List Token Halaman</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/remotetoken') }}">
                    <i class="fa fa-edit"></i> <span>Remote Token Halaman</span>
                </a>
            </li>
            @endauth
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
