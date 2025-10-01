<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('student.dashboard') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('student.data.show') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-user fa-tachometer-alt">

                </i>
                Profile Info
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('student.university.show') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-university fa-tachometer-alt">

                </i>
                Search Universities
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('student.logout') }}" class="c-sidebar-nav-link"
                onclick="return confirm('Are you sure you want to logout?')">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
                {{ trans('global.logout') }}
            </a>
        </li>

    </ul>

</div>
