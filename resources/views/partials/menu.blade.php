<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <!-- dashboard -->
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i> {{ trans('global.dashboard') }}
                </a>
            </li>
            <!-- Control -->
            @can('user_management_access')
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                        </i> {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i> {{ trans('cruds.permission.title') }}
                        </a>
                    </li>
                    @endcan @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i> {{ trans('cruds.role.title') }}
                        </a>
                    </li>
                    @endcan @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-user nav-icon">

                                    </i> {{ trans('cruds.user.title') }}
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Department -->
            <li class="nav-item">
                <a href="{{ route('admin.department.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </i> Department
                </a>
            </li>
            <!-- Job -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-calendar nav-icon"></i>Job
                </a>
                
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.Job.index') }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                            <i class="nav-icon fa-fw fas fa-calendar"></i> Job Application</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.JobApp.index") }}" class="nav-link {{ request()->is('admin/events') || request()->is('admin/events/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-cogs nav-icon"></i> Job Controller</a>
                    </li>
                </ul>
            </li>
            <!-- Calendar -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-calendar nav-icon"></i>Calendar
                </a>
                
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("calendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                            <i class="nav-icon fa-fw fas fa-calendar">

                    </i> {{ trans('global.systemCalendar') }}
                        </a>
                    </li>
                    @can('user_management_access')
                        @can('event_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.calendar.index") }}" class="nav-link {{ request()->is('admin/events') || request()->is('admin/events/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i> {{ trans('cruds.event.title') }}
                            </a>
                        </li> 
                        @endcan 
                    @endcan
                </ul>
            </li>
            <!-- Leave -->
            <li class="nav-item">
                <a href="{{ route('user.leave.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </i> Leave
                </a>
            </li>
            <!-- salary -->
            <li class="nav-item">
                <a href="{{ route('user.salary.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </i> Salary
                </a>
            </li>
            <!-- Email -->
            <li class="nav-item">
                <a href="{{ route("user.emails.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </i> Email
                </a>
            </li>
            <!-- logout -->
            <li class="nav-item">
                <a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i> {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>