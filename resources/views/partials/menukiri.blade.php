<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminlte/img/AdminLTELogo.png" class="img-circle elevation-3" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-bold">{{ Auth()->user()->nama }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/daftarmahasiswa" class="nav-link {{ Request::is('daftarmahasiswa*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>
                            Daftar Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pembayarankas" class="nav-link {{ Request::is('pembayarankas*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Pembayaran Uang Kas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Laporan Bulanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/informasi" class="nav-link {{ Request::is('informasi*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Informasi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
