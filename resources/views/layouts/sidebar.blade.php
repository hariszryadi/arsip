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

            @if (auth()->user()->can('classification-list') || auth()->user()->can('security-list') || auth()->user()->can('retention-list') || auth()->user()->can('mapping-list') || auth()->user()->can('archive-creator-list') || auth()->user()->can('rack-list'))
                <li class="nav-item nav-item-submenu {{ request()->is('classification') || request()->is('classification/*') || request()->is('security') || request()->is('security/*') || request()->is('retention') || request()->is('retention/*') || request()->is('mapping') || request()->is('mapping/*') || request()->is('archive-creator') || request()->is('archive-creator/*') || request()->is('rack') || request()->is('rack/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Master</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Master">
                        @can('classification-list')
                            <li class="nav-item"><a href="{{ route('classification.index') }}" class="nav-link {{ request()->is('classification') || request()->is('classification/*') ? 'active' : '' }}">Klasifikasi</a></li>
                        @endcan
                        @can('security-list')
                            <li class="nav-item"><a href="{{ route('security.index') }}" class="nav-link {{ request()->is('security') || request()->is('security/*') ? 'active' : '' }}">Keamanan</a></li>
                        @endcan
                        @can('retention-list')
                            <li class="nav-item"><a href="{{ route('retention.index') }}" class="nav-link {{ request()->is('retention') || request()->is('retention/*') ? 'active' : '' }}">Retensi</a></li>
                        @endcan
                        @can('mapping-list')
                            <li class="nav-item"><a href="{{ route('mapping.index') }}" class="nav-link {{ request()->is('mapping') || request()->is('mapping/*') ? 'active' : '' }}">Mapping</a></li>
                        @endcan
                        @can('archive-creator-list')
                            <li class="nav-item"><a href="{{ route('archive-creator.index') }}" class="nav-link {{ request()->is('archive-creator') || request()->is('archive-creator/*') ? 'active' : '' }}">Pencipta Arsip</a></li>
                        @endcan
                        @can('rack-list')
                            <li class="nav-item"><a href="{{ route('rack.index') }}" class="nav-link {{ request()->is('rack') || request()->is('rack/*') ? 'active' : '' }}">Rak</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            
            @if (auth()->user()->can('archives-vital-list') || auth()->user()->can('archives-static-list') || auth()->user()->can('archives-inactive-list') || auth()->user()->can('archives-destroy-list') || auth()->user()->can('archives-over-list'))
                <li class="nav-item nav-item-submenu {{ request()->is('archives-static') || request()->is('archives-static/*') || request()->is('archives-inactive') || request()->is('archives-inactive/*') || request()->is('archives-vital') || request()->is('archives-vital/*') || request()->is('archives-destroy') || request()->is('archives-destroy/*') || request()->is('archives-over') || request()->is('archives-over/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Data</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Data">
                        @can('archives-vital-list')
                            <li class="nav-item"><a href="{{ route('archives-vital.index') }}" class="nav-link {{ request()->is('archives-vital') || request()->is('archives-vital/*') ? 'active' : '' }}">Arsip Vital</a></li>
                        @endcan
                        @can('archives-static-list')
                            <li class="nav-item"><a href="{{ route('archives-static.index') }}" class="nav-link {{ request()->is('archives-static') || request()->is('archives-static/*') ? 'active' : '' }}">Arsip Statis</a></li>
                        @endcan
                        @can('archives-inactive-list')
                            <li class="nav-item"><a href="{{ route('archives-inactive.index') }}" class="nav-link {{ request()->is('archives-inactive') || request()->is('archives-inactive/*') ? 'active' : '' }}">Arsip Inaktif</a></li>
                        @endcan
                        @can('archives-destroy-list')
                            <li class="nav-item"><a href="{{ route('archives-destroy.index') }}" class="nav-link {{ request()->is('archives-destroy') || request()->is('archives-destroy/*') ? 'active' : '' }}">Usul Musnah</a></li>
                        @endcan
                        @can('archives-over-list')
                            <li class="nav-item"><a href="{{ route('archives-over.index') }}" class="nav-link {{ request()->is('archives-over') || request()->is('archives-over/*') ? 'active' : '' }}">Usul Serah</a></li>
                        @endcan
                    </ul>
                </li>
            @endif

            @if (auth()->user()->can('report-archive-vital-list') || auth()->user()->can('report-archive-static-list') || auth()->user()->can('report-archive-inactive-list') || auth()->user()->can('report-guest-list'))
                <li class="nav-item nav-item-submenu {{ request()->is('report-archive-vital') || request()->is('report-archive-static') || request()->is('report-archive-inactive') || request()->is('report-guest') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-file-stats"></i> <span>Report</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Report">
                        @can('report-archive-vital-list')
                            <li class="nav-item"><a href="{{ route('report-archive-vital') }}" class="nav-link {{ request()->is('report-archive-vital') ? 'active' : '' }}">Arsip Vital</a></li>
                        @endcan
                        @can('report-archive-static-list')
                            <li class="nav-item"><a href="{{ route('report-archive-static') }}" class="nav-link {{ request()->is('report-archive-static') ? 'active' : '' }}">Arsip Statis</a></li>
                        @endcan
                        @can('report-archive-inactive-list')
                            <li class="nav-item"><a href="{{ route('report-archive-inactive') }}" class="nav-link {{ request()->is('report-archive-inactive') ? 'active' : '' }}">Arsip Inaktif</a></li>
                        @endcan
                        @can('report-guest-list')
                            <li class="nav-item"><a href="{{ route('report-guest') }}" class="nav-link {{ request()->is('report-guest') ? 'active' : '' }}">Pengunjung</a></li>
                        @endcan
                    </ul>
                </li>
            @endif

            @if (auth()->user()->can('role-list') || auth()->user()->can('user-list'))
                <li class="nav-item nav-item-submenu {{ request()->is('role') || request()->is('role/*') || request()->is('user') || request()->is('user/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-user-lock"></i> <span>User Config</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="User Config">
                        @can('role-list')
                            <li class="nav-item"><a href="{{ route('role.index') }}" class="nav-link {{ request()->is('role') || request()->is('role/*') ? 'active' : '' }}">Role</a></li>
                        @endcan
                        @can('user-list')
                            <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') || request()->is('user/*') ? 'active' : '' }}">User</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            
            @if (auth()->user()->can('banner-list'))
                <li class="nav-item nav-item-submenu {{ request()->is('banner') || request()->is('banner/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-gear"></i> <span>Pengaturan</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Pengaturan">
                        @can('banner-list')
                            <li class="nav-item"><a href="{{ route('banner.index') }}" class="nav-link {{ request()->is('banner') || request()->is('banner/*') ? 'active' : '' }}">Banner</a></li>
                        @endcan
                    </ul>
                </li>
            @endif
            <!-- /main -->

        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->