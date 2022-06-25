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
        <li class=" @active('admin.lessons') ">
          <a class="nav-link" href="{{ route('admin.lessons.index') }}">
            <i class="fas fa-chalkboard-teacher"></i> <span>Lessons</span>
          </a>
        </li>
      </ul>
  </aside>
</div>
