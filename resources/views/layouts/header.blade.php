<header class="header header-sticky p-0 mb-4">
    <div class="container-fluid border-bottom px-4">
        <button class="header-toggler" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
            style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
                <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/Raruu/PBL-RekomMagang-Semester-4" target="_blank">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ url('build/@coreui/icons/sprites/brand.svg#cib-github') }}"></use>
                    </svg>
                    Raruu/PBL-RekomMagang-Semester-4
                </a>
            </li>
        </ul>
        <ul class="header-nav ms-auto">
            {{-- KOSONG --}}
        </ul>
        <ul class="header-nav">
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button"
                    aria-expanded="false" data-coreui-toggle="dropdown">
                    <svg class="icon icon-lg theme-icon-active">
                        <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-contrast') }}">
                        </use>
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button"
                            data-coreui-theme-value="light">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-sun') }}">
                                </use>
                            </svg>Light
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button"
                            data-coreui-theme-value="dark">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-moon') }}">
                                </use>
                            </svg>Dark
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center active" type="button"
                            data-coreui-theme-value="auto">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-contrast') }}">
                                </use>
                            </svg>Auto
                        </button>
                    </li>
                </ul>
            </li>
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md" style="clip-path: circle(50% at 50% 50%);">
                        <img class="avatar-img"
                            src="{{ Auth::user()->getPhotoProfile() ? asset(Auth::user()->getPhotoProfile()) : asset('imgs/profile_placeholder.jpg') }}?{{ now() }}"
                            alt="pfp">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                        <div class="fw-semibold">Settings</div>
                    </div>
                    <a class="dropdown-item" href="{{ route(Auth::user()->role . '.profile') }}">
                        <svg class="icon me-2">
                            <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
                        </svg> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        <svg class="icon me-2">
                            <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-account-logout') }}">
                            </use>
                        </svg> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
    @if (request()->path() !== Auth::user()->role)
        <div class="container-fluid px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0">
                    @foreach (array_slice(explode('/', request()->path()), 0) as $segment)
                        @php $link = implode('/', array_slice(explode('/', request()->path()), 0, $loop->index + 1)); @endphp
                        <li class="breadcrumb-item {{ request()->is($link) ? 'active' : '' }}">
                            <a href="{{ url($link) }}"
                                class="text-decoration-none fw-bold">{{ Str::ucfirst($segment) }}</a>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    @endif
</header>
