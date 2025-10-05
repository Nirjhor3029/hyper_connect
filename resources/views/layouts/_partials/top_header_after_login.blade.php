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
                {{-- <div class="nav-item me-3 position-relative">
                    <i class="fas fa-bell nav-icon"></i>
                    <span class="badge bg-danger chat-badge">5</span>
                </div> --}}

                <!-- Notifications -->
                <div class="nav-item dropdown me-3 position-relative">
                    <a class="nav-link" href="#" id="notificationsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell nav-icon"></i>
                        <span class="badge bg-danger chat-badge">{{ $notifications->count() ?? 0 }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="notificationsDropdown"
                        style="width: 300px;">
                        <li class="dropdown-header bg-light px-3 py-2">
                            Notifications
                        </li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        @forelse ($notifications as $notification)
                            <li>
                                <a href="{{ $notification->link ?? '#' }}"
                                    class="dropdown-item d-flex align-items-start py-2">
                                    <div class="me-2">
                                        <i class="fas fa-info-circle text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold">{{ $notification->title }}</div>
                                        {{-- <small class="text-muted">
                                            {{ $notification->body ??'' }}
                                        </small> --}}
                                        <small class="text-muted">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                </a>
                            </li>
                        @empty
                            <li class="dropdown-item text-center text-muted py-2">
                                No notifications
                            </li>
                        @endforelse
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li>
                            {{-- <a href="{{ route('student.notifications.index') }}" class="dropdown-item text-center py-2"> --}}
                            {{-- <a href="#" class="dropdown-item text-center py-2">
                                View All
                            </a> --}}
                        </li>
                    </ul>
                </div>








                <!-- Chat with badge -->
                <div class="nav-item me-3 position-relative">
                    <i class="fas fa-comment nav-icon"></i>
                    <span class="badge bg-danger chat-badge">0</span>
                </div>

                <!-- Profile -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown"
                        role="button" data-bs-toggle="dropdown">
                        <div class="profile-avatar me-2">
                            {{ Auth::user()->first_name ?? explode(' ', Auth::user()->name)[0] }}
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
