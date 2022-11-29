<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
{{--

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/reservations') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Reservations</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/tables') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/function-hall') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Function Hall</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/cottages') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Cottages</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/rooms') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Rooms</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/bookings') }}">
          <i class="mdi mdi-calendar-check menu-icon"></i>
          <span class="menu-title">Bookings</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Rooms</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/rooms') }}">View Rooms</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/rooms/create') }}">Add Room</a></li>
          </ul>
        </div>
      </li> --}}
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
