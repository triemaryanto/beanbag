<div class="sidebar-content">
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
            </li>

            @can('home')
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endcan

            <li class="nav-item nav-item-submenu">
                <a href="#"
                    class="nav-link{{ request()->is('user*', 'profile*', 'role*', 'permission*') ? ' active' : '' }}"><i
                        class="icon-people"></i> <span>User pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="User pages">
                    {{-- @can('user') --}}
                    <li class="nav-item"><a href="{{ route('user') }}" class="nav-link">User list</a></li>
                    {{-- @endcan --}}
                    {{-- @can('profile') --}}
                    <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
                    {{-- @endcan --}}
                    {{-- @can('role') --}}
                    <li class="nav-item"><a href="{{ route('role') }}" class="nav-link">Role</a></li>
                    {{-- @endcan --}}
                    {{-- @can('permission') --}}
                    <li class="nav-item"><a href="{{ route('permission') }}" class="nav-link">Permission</a></li>
                    {{-- @endcan --}}
                </ul>
            </li>
        </ul>
    </div>
</div>
