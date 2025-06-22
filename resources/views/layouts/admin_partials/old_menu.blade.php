<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/permissions*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/users*') ? 'c-show' : '' }} {{ request()->is('admin/user-settings*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_setting_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.user-settings.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/user-settings') || request()->is('admin/user-settings/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.userSetting.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('setting_access')
            <li
                class="c-sidebar-nav-dropdown
                {{ request()->is('admin/countries*') ? 'c-show' : '' }}
                {{ request()->is('admin/states*') ? 'c-show' : '' }}
			    {{ request()->is('admin/cities*') ? 'c-show' : '' }}
                {{ request()->is('admin/admission-stages*') ? 'c-show' : '' }}
                {{ request()->is('admin/admission-statuses*') ? 'c-show' : '' }}
                ">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">
                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('country_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.countries.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-flag c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.country.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('state_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.states.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/states') || request()->is('admin/states/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-map-pin c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.state.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('city_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.cities.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/cities') || request()->is('admin/cities/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-map-marked-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.city.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('admission_stage_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.admission-stages.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/admission-stages') || request()->is('admin/admission-stages/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-school c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.admissionStage.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('admission_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.admission-statuses.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/admission-statuses') || request()->is('admin/admission-statuses/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-signal c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.admissionStatus.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan

        <li
            class="c-sidebar-nav-dropdown {{ request()->is('new-students*') ? 'c-show' : '' }} {{ request()->is('prospected-students*') ? 'c-show' : '' }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                </i>
                {{ __('Students') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                @can('new_student_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('admin.students.new') }}"
                           class="c-sidebar-nav-link {{ request()->is('new-students') || request()->is('new-students/*') ? 'c-active' : '' }}">
                            <i class="fa-fw fas fa-flag c-sidebar-nav-icon"></i>
                            {{ __('New Students') }}
                        </a>
                    </li>
                @endcan
                @can('prospected_student_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('admin.students.prospected') }}"
                           class="c-sidebar-nav-link {{ request()->is('prospected-students') || request()->is('prospected-students/*') ? 'c-active' : '' }}">
                            <i class="fa-fw fas fa-flag c-sidebar-nav-icon"></i>
                            {{ __('prospect Students') }}
                        </a>
                    </li>
                @endcan

            </ul>
        </li>


        @can('student_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.students.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/students') || request()->is('admin/students/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-user-graduate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.student.title') }}
                </a>
            </li>
        @endcan
        @can('university_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.universities.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/universities') || request()->is('admin/universities/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-university c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.university.title') }}
                </a>
            </li>
        @endcan
        @can('university_partnership_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.university-partnerships.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/university-partnerships') || request()->is('admin/university-partnerships/*') ? 'c-active' : '' }}">
                    <i class="fa-fw far fa-handshake c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.universityPartnership.title') }}
                </a>
            </li>
        @endcan
        @can('program_setting_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/programs*') ? 'c-show' : '' }}
                {{ request()->is('admin/tags*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-blender c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.programSetting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('program_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.programs.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/programs') || request()->is('admin/programs/*') ? 'c-active' : '' }}">
                                <i class="fa-fw far fa-file-powerpoint c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.program.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.tags.index') }}"
                               class="c-sidebar-nav-link {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tag.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('application_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.applications.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/applications') || request()->is('admin/applications/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-file-signature c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.application.title') }}
                </a>
            </li>
        @endcan
        @can('agent_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.agents.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/agents') || request()->is('admin/agents/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.agent.title') }}
                </a>
            </li>
        @endcan
        @can('document_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.documents.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/documents') || request()->is('admin/documents/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.document.title') }}
                </a>
            </li>
        @endcan
        @can('document_type_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.document-types.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/document-types') || request()->is('admin/document-types/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-passport c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.documentType.title') }}
                </a>
            </li>
        @endcan
        @can('payment_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.payments.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/payments') || request()->is('admin/payments/*') ? 'c-active' : '' }}">
                    <i class="fa-fw far fa-money-bill-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.payment.title') }}
                </a>
            </li>
        @endcan
        @can('agent_commission_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.agent-commissions.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/agent-commissions') || request()->is('admin/agent-commissions/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.agentCommission.title') }}
                </a>
            </li>
        @endcan
        @can('visa_application_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.visa-applications.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/visa-applications') || request()->is('admin/visa-applications/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fab fa-cc-visa c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.visaApplication.title') }}
                </a>
            </li>
        @endcan
        @can('offer_letter_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.offer-letters.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/offer-letters') || request()->is('admin/offer-letters/*') ? 'c-active' : '' }}">
                    <i class="fa-fw far fa-envelope c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.offerLetter.title') }}
                </a>
            </li>
        @endcan
        @can('status_log_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.status-logs.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/status-logs') || request()->is('admin/status-logs/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-history c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.statusLog.title') }}
                </a>
            </li>
        @endcan
        @can('course_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.courses.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/courses') || request()->is('admin/courses/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-address-book c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.course.title') }}
                </a>
            </li>
        @endcan
        @can('commission_from_university_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.commission-from-universities.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/commission-from-universities') || request()->is('admin/commission-from-universities/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.commissionFromUniversity.title') }}
                </a>
            </li>
        @endcan
        @can('subject_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.subjects.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/subjects') || request()->is('admin/subjects/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.subject.title') }}
                </a>
            </li>
        @endcan
        @can('commission_setting_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.commission-settings.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/commission-settings') || request()->is('admin/commission-settings/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.commissionSetting.title') }}
                </a>
            </li>
        @endcan
        @can('commission_distribution_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.commission-distributions.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/commission-distributions') || request()->is('admin/commission-distributions/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.commissionDistribution.title') }}
                </a>
            </li>
        @endcan
        @can('nationality_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.nationalities.index') }}"
                   class="c-sidebar-nav-link {{ request()->is('admin/nationalities') || request()->is('admin/nationalities/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-flag-checkered c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.nationality.title') }}
                </a>
            </li>
        @endcan
        @can('education_level_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.education-levels.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/education-levels") || request()->is("admin/education-levels/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-graduation-cap c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.educationLevel.title') }}
                </a>
            </li>
        @endcan
        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                       href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
               onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
