<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="/">
        <img class="navbar-brand-dark" src="/img/brand/light.svg" alt="Logo" /> <img class="navbar-brand-light" src="/img/brand/dark.svg" alt="Logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item @active('student.dashboard')">
                <a href="{{ route('student.dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-fw fa-fire"></i>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @active('student.rooms')">
                <a href="{{ route('student.rooms.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-fw fa-user-friends"></i>
                    </span>
                    <span class="sidebar-text">Classes</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
