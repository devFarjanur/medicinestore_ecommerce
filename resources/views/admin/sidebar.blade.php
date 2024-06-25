<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            single<span>Vendor</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>

            <li class="nav-item mt-1">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mt-1">
                <a class="nav-link" data-bs-toggle="collapse" href="#customer" role="button" aria-expanded="false" aria-controls="customer">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Customers</span>
                </a>
            </li>

            <li class="nav-item mt-1">
                <a href="{{ route('admin.categories') }}" class="nav-link {{ request()->routeIs('admin.categories') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>


            <li class="nav-item mt-1">
                <a href="{{ route('admin.product') }}" class="nav-link {{ request()->routeIs('admin.product') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="shopping-bag"></i>
                    <span class="link-title">Products</span>
                </a>
            </li>

            <li class="nav-item mt-1">
                <a class="nav-link {{ request()->routeIs('admin.order') ? 'active' : '' }}" href="{{ route('admin.order') }}">
                    <i class="link-icon" data-feather="shopping-cart"></i>
                    <span class="link-title">Orders</span>
                </a>
            </li>

            <li class="nav-item mt-1">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Message</span>
                </a>
            </li>

            <li class="nav-item mt-1">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
