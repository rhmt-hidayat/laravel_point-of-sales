<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">POS KASIR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('home') }}">Dashboard</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="menu-header">Users</li> --}}
            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}"
                    class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('user.index') }}">All User</a>
                            {{-- href="">All User</a> --}}
                    </li>
                </ul>
            </li>

            {{-- <li class="menu-header">Products</li> --}}
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Products</a>
                        {{-- <a class="nav-link" href="">All Products</a> --}}
                    </li>

                </ul>
            </li>

        </ul>
    </aside>
</div>
