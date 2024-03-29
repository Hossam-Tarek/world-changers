<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('teacher.home') }}" class="brand-link">
        <img src="{{ asset(getSetting('logo')) }}" alt="Logo" class="brand-image elevation-3" style="opacity: .8; border-radius: 5px">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(auth('teacher')->user()->image ?? 'admin-assets/dist/img/user2-160x160.jpg') }}" style="max-height: 30px; width: auto" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('teacher.profile.edit') }}" class="d-block">{{ auth('teacher')->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('teacher.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ __('teacher.dashboard') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" id="logout-form" action="{{ route('teacher.logout') }}">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">{{ __('teacher.logout') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
