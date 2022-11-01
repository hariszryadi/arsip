<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-section sidebar-user my-1">
        <div class="sidebar-section-body">
            <div class="media">
                <a href="#" class="mr-3">
                    <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" class="rounded-circle" alt="">
                </a>

                <div class="media-body">
                    <div class="font-weight-semibold">{{ auth()->user()->name }}</div>
                    <div class="font-size-sm line-height-sm opacity-50">
                        {{ auth()->user()->email }}
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-section">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu {{ request()->is('classification') || request()->is('classification/*') || request()->is('security') || request()->is('security/*') || request()->is('retention') || request()->is('retention/*') || request()->is('mapping') || request()->is('mapping/*') || request()->is('archive-creator') || request()->is('archive-creator/*') || request()->is('rack') || request()->is('rack/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Master</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Master">
                    <li class="nav-item"><a href="{{ route('classification.index') }}" class="nav-link {{ request()->is('classification') || request()->is('classification/*') ? 'active' : '' }}">Klasifikasi</a></li>
                    <li class="nav-item"><a href="{{ route('security.index') }}" class="nav-link {{ request()->is('security') || request()->is('security/*') ? 'active' : '' }}">Keamanan</a></li>
                    <li class="nav-item"><a href="{{ route('retention.index') }}" class="nav-link {{ request()->is('retention') || request()->is('retention/*') ? 'active' : '' }}">Retensi</a></li>
                    <li class="nav-item"><a href="{{ route('mapping.index') }}" class="nav-link {{ request()->is('mapping') || request()->is('mapping/*') ? 'active' : '' }}">Mapping</a></li>
                    <li class="nav-item"><a href="{{ route('archive-creator.index') }}" class="nav-link {{ request()->is('archive-creator') || request()->is('archive-creator/*') ? 'active' : '' }}">Pencipta Arsip</a></li>
                    <li class="nav-item"><a href="{{ route('rack.index') }}" class="nav-link {{ request()->is('rack') || request()->is('rack/*') ? 'active' : '' }}">Rak</a></li>
                </ul>
            </li>
            
            <li class="nav-item nav-item-submenu {{ request()->is('archives-static') || request()->is('archives-static/*') || request()->is('archives-inactive') || request()->is('archives-inactive/*') || request()->is('archives-vital') || request()->is('archives-vital/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Data</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Data">
                    <li class="nav-item"><a href="{{ route('archives-vital.index') }}" class="nav-link {{ request()->is('archives-vital') || request()->is('archives-vital/*') ? 'active' : '' }}">Arsip Vital</a></li>
                    <li class="nav-item"><a href="{{ route('archives-static.index') }}" class="nav-link {{ request()->is('archives-static') || request()->is('archives-static/*') ? 'active' : '' }}">Arsip Statis</a></li>
                    <li class="nav-item"><a href="{{ route('archives-inactive.index') }}" class="nav-link {{ request()->is('archives-inactive') || request()->is('archives-inactive/*') ? 'active' : '' }}">Arsip Inaktif</a></li>
                    <li class="nav-item"><a href="{{ route('archives-destroy.index') }}" class="nav-link {{ request()->is('archives-destroy') || request()->is('archives-destroy/*') ? 'active' : '' }}">Usul Musnah</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Usul Serah</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu {{ request()->is('report-archive-vital') || request()->is('report-archive-static') || request()->is('report-archive-inactive') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-file-stats"></i> <span>Report</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Report">
                    <li class="nav-item"><a href="{{ route('report-archive-vital') }}" class="nav-link {{ request()->is('report-archive-vital') ? 'active' : '' }}">Arsip Vital</a></li>
                    <li class="nav-item"><a href="{{ route('report-archive-static') }}" class="nav-link {{ request()->is('report-archive-static') ? 'active' : '' }}">Arsip Statis</a></li>
                    <li class="nav-item"><a href="{{ route('report-archive-inactive') }}" class="nav-link {{ request()->is('report-archive-inactive') ? 'active' : '' }}">Arsip Inaktif</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu {{ request()->is('user') || request()->is('user/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-user-lock"></i> <span>User Config</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="User Config">
                    <li class="nav-item"><a href="#" class="nav-link">Role</a></li>
                    <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') || request()->is('user/*') ? 'active' : '' }}">User</a></li>
                </ul>
            </li>
            
            <li class="nav-item nav-item-submenu {{ request()->is('banner') || request()->is('banner/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                <a href="#" class="nav-link"><i class="icon-gear"></i> <span>Pengaturan</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Pengaturan">
                    <li class="nav-item"><a href="{{ route('banner.index') }}" class="nav-link {{ request()->is('banner') || request()->is('banner/*') ? 'active' : '' }}">Banner</a></li>
                </ul>
            </li>
            <!-- /main -->

        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->