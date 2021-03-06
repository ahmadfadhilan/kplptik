<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>
            <li class="nav-title">
                Main
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('peralatan')) }}" href="{{ route('peralatan.index') }}">
                    <i class="nav-icon fa fa-archive"></i> Asset
                </a>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('bangunan'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('')) }}" href="#">
                    <i class="nav-icon fa fa-building"></i> @lang('menus.backend.sidebar.building')
                </a>

                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link {{ active_class(Active::checkUriPattern('bangunan')) }}" href="{{ route('bangunan.index') }}">
                           @lang('menus.backend.sidebar.building') Management
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ active_class(Active::checkUriPattern('bangunan')) }}" href="{{ route('ruangan.index') }}">
                           @lang('menus.backend.sidebar.room') Management
                      </a>
                  </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('dosen'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('')) }}" href="#">
                    <i class="nav-icon fa fa-users"></i> @lang('menus.backend.sidebar.building')
                </a>

                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link {{ active_class(Active::checkUriPattern('dosen')) }}" href="{{ route('dosen.index') }}">
                           @lang('menus.backend.sidebar.lecturer') Management
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ active_class(Active::checkUriPattern('mahasiswa')) }}" href="{{ route('mahasiswa.index') }}">
                           @lang('menus.backend.sidebar.student') Management
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ active_class(Active::checkUriPattern('tendik')) }}" href="{{ route('tendik.index') }}">
                           @lang('menus.backend.sidebar.tendik') Management
                      </a>
                  </li>
                </ul>
            </li>

            <li class="nav-title">
                @lang('menus.backend.sidebar.system')
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/auth*')) }}" href="#">
                        <i class="nav-icon icon-user"></i> @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="divider"></li>

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}" href="#">
                    <i class="nav-icon icon-list"></i> @lang('menus.backend.log-viewer.main')
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            @lang('menus.backend.log-viewer.dashboard')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            @lang('menus.backend.log-viewer.logs')
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
