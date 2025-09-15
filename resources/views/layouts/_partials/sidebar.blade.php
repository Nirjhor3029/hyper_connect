<!-- Fixed Sidebar -->
<div class="sidebar">
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
            <div class="sidebar-item">
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
</div>
