<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('beranda') ? 'active' : '' }}">
            <a class="nav-link" href="/beranda">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/daftar/jadwal*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/daftar/jadwal">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Daftar Perkara</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/umum/golongan*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/umum/golongan">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Data Golongan</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/umum/jabatan*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/umum/jabatan">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Data Jabatan</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/umum/hakim*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/umum/hakim">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Data Hakim</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/umum/jaksa*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/umum/jaksa">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Data Jaksa</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/umum/panitera*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/umum/panitera">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Data Panitera</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('superadmin/perkara/pidana*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/perkara/pidana">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data Pidana</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('superadmin/perkara/perdata*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/perkara/perdata">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data Perdata</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('superadmin/perkara/tipikor*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/perkara/tipikor">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data Tipikor</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('superadmin/perkara/phi*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/perkara/phi">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data PHI</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/sidang/pdn*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/sidang/pdn">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Sidang Pidana</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/sidang/pdt*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/sidang/pdt">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Sidang Perdata</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/sidang/tpk*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/sidang/tpk">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Sidang Tipikor</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('superadmin/sidang/pehai*') ? 'active' : '' }}">
            <a class="nav-link" href="/superadmin/sidang/pehai">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Sidang PHI</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('laporan*') ? 'active' : '' }}">
            <a class="nav-link" href="/laporan">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">Laporan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>