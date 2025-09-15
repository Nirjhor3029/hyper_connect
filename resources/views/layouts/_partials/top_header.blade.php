<!-- Top-Header -->
    <header class="header" style="padding:10px 25px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a class="navbar-brand" href="#">
                        {{-- HYPER<br><small style="font-size: 14px;">CONNECT</small> --}}
                        <img src="{{ asset('assets/images/hyper_connect_logo_no_bg.png') }}" height="60px"
                            alt="Hyper Connect" srcset="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                            <a class="nav-link" href="#">About Us</a>
                            <a class="nav-link" href="#">Services</a>
                            <a class="nav-link {{ request()->routeIs('contactUs') ? 'active' : '' }}"
                                href="{{ route('contactUs') }}">Contact Us</a>
                            <a class="nav-link" href="/login">Sign In</a>
                        </div>
                    </nav>
                </div>
                {{-- <div class="col-lg-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            {{ auth()->user()->name ?? 'User' }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div> --}}

            </div>
        </div>
    </header>