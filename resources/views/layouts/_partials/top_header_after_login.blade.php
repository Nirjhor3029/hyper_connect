<style>
    .dropdown-menu {
        right: 0 !important;
        left: auto !important;
    }
</style>
<nav class="navbar navbar-expand-lg top-nav fixed-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/hyper_connect_logo_no_bg.png') }}" alt="Logo" height="40">
        </a>

        <div class="navbar-nav ms-auto d-flex flex-row align-items-center">

            @if (auth()->check())
                <!-- Search -->
                <div class="nav-item me-3">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="nav-item me-3 position-relative">
                    <i class="fas fa-bell nav-icon"></i>
                </div>

                <!-- Chat with badge -->
                <div class="nav-item me-3 position-relative">
                    <i class="fas fa-comment nav-icon"></i>
                    <span class="badge bg-danger chat-badge">5</span>
                </div>

                <!-- Profile -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown"
                        role="button" data-bs-toggle="dropdown">
                        <div class="profile-avatar me-2">
                            {{ Auth::user()->first_name }}
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            {{-- <a class="dropdown-item" href="#">Logout</a> --}}
                            <a href="{{ route('student.logout') }}" class="dropdown-item c-sidebar-nav-link"
                                onclick="return confirm('Are you sure you want to logout?')">
                                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
                                {{ trans('global.logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            @endif


        </div>
    </div>
</nav>
