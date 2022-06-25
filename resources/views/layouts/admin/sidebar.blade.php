<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">SV</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class=" @active('admin.dashboard') ">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fire"></i> <span>Credits</span>
          </a>
        </li>
        <li class="menu-header">Academic</li>
        <li class=" @active('admin.rooms') ">
          <a class="nav-link" href="{{ route('admin.rooms.index') }}">
            <i class="fas fa-layer-group"></i> <span>Rooms</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
          </ul>
        </li>
      </ul>
  </aside>
</div>
