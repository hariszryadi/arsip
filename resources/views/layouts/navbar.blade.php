<div class="d-flex flex-1 d-lg-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
        <i class="icon-paragraph-justify3"></i>
    </button>
    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
        <i class="icon-transmission"></i>
    </button>
</div>

<div class="navbar-brand text-center text-lg-left">
    <a href="" class="d-inline-block">
        <img src="{{ asset('images/depo.png') }}" class="d-none d-sm-block" alt="" style="height: 35px">
        <img src="{{ asset('images/logo-sm.png') }}" class="d-sm-none" alt="" style="height: 35px">
    </a>
</div>

<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">

    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item dropdown">
        </li>
    </ul>
</div>

<ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
    <li class="nav-item nav-item-dropdown-lg dropdown">
    </li>

    <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
        <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
            <img src="{{ asset('storage/'.auth()->user()->avatar) }}" class="rounded-pill mr-lg-2" height="34" alt="" onerror="this.onerror=null;this.src='{{ asset('global_assets/images/placeholders/placeholder.jpg') }}';">
            <span class="d-none d-lg-inline-block">{{ auth()->user()->name }}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('change-password.edit') }}" class="dropdown-item"><i class="icon-cog5"></i> Ubah Password</a>
            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>