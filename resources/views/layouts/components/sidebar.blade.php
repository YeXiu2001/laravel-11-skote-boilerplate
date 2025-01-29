<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item ">
    <a class="nav-link collapsed homeblade" href="/home">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="components-alerts.html">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
     
      </li>
    </ul>
  </li><!-- End Components Nav -->

  @hasanyrole('Super Admin|Admin')
  <li class="nav-heading">Developer</li>

  <li class="nav-item">
    <a class="nav-link collapsed rolesblade" href="/roles">
      <i class="bi bi-person-badge"></i>
      <span>Roles</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed usersblade" href="/users">
      <i class="bi bi-people"></i>
      <span>Users</span>
    </a>
  </li>
  @endhasanyrole

</ul>

</aside><!-- End Sidebar--><!-- End Sidebar-->