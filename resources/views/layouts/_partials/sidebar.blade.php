<!-- Toggle Button for Mobile -->
<div class="mobile-sidebar-toggle d-md-none">
    <img src="{{ asset('assets/home/icons/menu.svg') }}" alt="menu" id="sidebarToggleBtn">
</div>

<!-- Fixed Sidebar -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Fixed Sidebar -->
<div class="sidebar" id="sidebarMenu">
    <div class="sidebar-item-group">
        <a href="{{ route('home') }}">
            <div class="sidebar-item">
                {{-- <i class="fas fa-home"></i> --}}
                <img src="{{ asset('assets/home/icons/home.svg') }}" alt="" srcset="">
            </div>
        </a>
        <span class="sidebar-menu-text">Home</span>
    </div>
    <div class="sidebar-item-group">
        <a href="{{ route('programs') }}">
            <div class="sidebar-item {{ request()->is('programs') ? 'active' : '' }}">
                {{-- <i class="fa-solid fa-book-open"></i> --}}
                <img src="{{ asset('assets/home/icons/programs.svg') }}" alt="" srcset="">
            </div>
        </a>
        <span class="sidebar-menu-text">Programs</span>
    </div>
    <div class="sidebar-item-group">
        <a href="#">
            <div class="sidebar-item">
                {{-- <i class="fas fa-graduation-cap"></i> --}}
                <img src="{{ asset('assets/home/icons/documents.svg') }}" alt="" srcset="">
            </div>
        </a>
        <span class="sidebar-menu-text">Documents</span>
    </div>
    <div class="sidebar-item-group">
        <div class="sidebar-item">
            {{-- <i class="fas fa-book"></i> --}}
            <img src="{{ asset('assets/home/icons/shortlists.svg') }}" alt="" srcset="">
        </div>
        <span class="sidebar-menu-text">Shortlists</span>
    </div>
    <div class="sidebar-item-group">
        <div class="sidebar-item">
            {{-- <i class="fas fa-envelope"></i> --}}
            <img src="{{ asset('assets/home/icons/visa.svg') }}" alt="" srcset="">
        </div>
        <span class="sidebar-menu-text">Visa</span>
    </div>
    <div class="sidebar-item-group">
        <a href="{{ route('student.application.form') }}">
            <div class="sidebar-item {{ request()->is('application-form') ? 'active' : '' }}">
                {{-- <i class="fas fa-envelope"></i> --}}
                <img src="{{ asset('assets/home/icons/applications.svg') }}" alt="" srcset="">
            </div>
        </a>
        {{-- <span class="sidebar-menu-text">Applications <br> & Offers</span> --}}
        <span class="sidebar-menu-text">Application form</span>
    </div>
    <div class="sidebar-item-group position-relative">
        <a href="{{ route('student.offerLetters.index') }}">
            <div class="sidebar-item {{ request()->is('offer-letters') ? 'active' : '' }}">
                <img src="{{ asset('assets/home/icons/applications.svg') }}" alt="" srcset="">

                @php
                    // Example counter value
                    $offerLettersCount = 3; // Replace with dynamic value from your controller
                @endphp

                @if ($offerLettersCount > 0)
                    {{-- <span class="notification-badge">{{ $offerLettersCount }}</span> --}}
                @endif
            </div>
        </a>
        <span class="sidebar-menu-text">Offer Letters</span>
    </div>

    <div class="sidebar-item-group">
        <a href="{{ route('online-application') }}">
            <div class="sidebar-item {{ request()->is('online-application') ? 'active' : '' }}">
                {{-- <i class="fas fa-home"></i> --}}
                <img src="{{ asset('assets/home/icons/applications.svg') }}" alt="" srcset="">
            </div>
        </a>
        <span class="sidebar-menu-text">
            Online Application
        </span>
    </div>

</div>
