<!-- Sidebar navigation-->
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Beranda</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
    </ul>

    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">PortoFolio</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('biodata.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-person-badge"></i>
                </span>
                <span class="hide-menu">Biodata</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('pendidikan.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-file-post"></i>
                </span>
                <span class="hide-menu">Pendidikan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('pengalaman.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-file-ruled"></i>
                </span>
                <span class="hide-menu">Pengalaman</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('skill.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-clipboard-pulse"></i>
                </span>
                <span class="hide-menu">Skill</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('bahasa-pemograman.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-pc-display"></i>
                </span>
                <span class="hide-menu">Bahasa Pemograman</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('project.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-building-gear"></i>
                </span>
                <span class="hide-menu">Project</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" target="_blank" href="{{ route('portofolio.index', Auth::user()->username) }}"
                aria-expanded="false">
                <span>
                    <i class="bi bi-box-arrow-in-up-right"></i>
                </span>
                <span class="hide-menu">View Protofolio</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Sidebar navigation -->
