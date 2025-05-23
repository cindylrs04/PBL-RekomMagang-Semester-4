<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar" style="z-index: 1037; transition: all 0.0s ease-in-out;">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
            <svg class="sidebar-brand-full" width="88" height="32" alt="Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="32" height="32" alt="Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close"
            onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ url('build/@coreui/icons/sprites/free.svg#cil-speedometer') }}">
                    </use>
                </svg> Dashboard
            </a>
        </li>
        @if (Auth::user()->getRole() == 'admin')
            @include('layouts.sidebar.admin')
        @elseif (Auth::user()->getRole() == 'mahasiswa')
            @include('layouts.sidebar.mahasiswa')
        @elseif (Auth::user()->getRole() == 'dosen')
            @include('layouts.sidebar.dosen')
        @endif
    </ul>
    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"
            onClick="setStateSidebar()"></button>
    </div>
</div>
