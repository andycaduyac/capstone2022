<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/reservations') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Reservations</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/users') }}">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/guest-reservations') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Guest Reservations</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/calendar') }}">
          <i class="mdi mdi-calendar menu-icon"></i>
          <span class="menu-title">Calendar</span>
        </a>
      </li> --}}
    </ul>
</nav>
