<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <!--img alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8"-->
    <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!--img class="img-circle elevation-2" alt="User Image"-->
      </div>
      <div class="info">
        <a href="#" class="d-block">

        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <router-link to="/dashvue" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt blue"></i>
            <p>
              Dashvue
            </p>
          </router-link>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog green"></i>
            <p>
              Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/users" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/sample" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Trigger Sample</p>
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link to="/profile" class="nav-link">
            <i class="nav-icon fas fa-user orange"></i>
            <p>
              Profile
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="nav-icon fa fa-power-off red"></i>
            <p>
              {{ __('Log Out') }}
            </p>
          </a>
          <form id="logout-form" method="POST" action="{{ route('logout') }}">
              @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
