<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset(getSetting('logo')) }}" alt="Logo" class="brand-image elevation-3" style="opacity: .8; border-radius: 5px">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(auth('admin')->user()->image ?? 'admin-assets/dist/img/user2-160x160.jpg') }}" style="max-height: 30px; width: auto" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.profile.edit') }}" class="d-block">{{ auth('admin')->user()->name }}</a>
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
                    <a href="{{ route('admin.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ __('admin.dashboard') }}</p>
                    </a>
                </li>

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('roles'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-list-ul mr-2"></i>
                            <p>
                                {{ __('admin.roles') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.roles') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.add') .' '. __('admin.role') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('admins'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-shield mr-2"></i>
                            <p>
                                {{ __('admin.admins') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.admins.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.admins') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.admins.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.add') .' '. __('admin.admin') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('subjects'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book mr-2"></i>
                            <p>
                                {{ __('admin.subjects') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.subjects.index') }}" class="nav-link">
                                    <i class="fas fa-book mr-2"></i>
                                    <p>{{ __('admin.subjects') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.subjects.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.add') .' '. __('admin.subject') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('units'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book mr-2"></i>
                            <p>
                                {{ __('admin.units') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.units.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.units') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.units.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.add') .' '. __('admin.unit') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('lessons'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book-open mr-2"></i>
                            <p>
                                {{ __('admin.lessons') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.lessons.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.lessons') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.lessons.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ __('admin.add') .' '. __('admin.lesson') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('pages'))
                    <li class="nav-item">
                        <a href="{{ route('admin.pages.index') }}" class="nav-link">
                            <i class="fas fa-file mr-2"></i>
                            <p>{{ __('admin.pages') }}</p>
                        </a>
                    </li>
                @endif

                @if(auth('admin')->user()->hasRole('super-admin') || auth('admin')->user()->can('settings'))
                    <li class="nav-item">
                        <a href="{{ route('admin.settings.edit') }}" class="nav-link">
                            <i class="fas fa-tools mr-2"></i>
                            <p>{{ __('admin.settings') }}</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <form method="POST" id="logout-form" action="{{ route('admin.logout') }}">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">{{ __('admin.logout') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
