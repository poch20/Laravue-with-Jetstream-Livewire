<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <!--img alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8"-->
    <span class="brand-text font-weight-light">{{ auth('sanctum')->user()->name }}</span>

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

        <li class="nav-item">
          <router-link to="/dashvue" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt blue"></i>
            <p>
              Dashvue
            </p>
          </router-link>
        </li>


        @php
        $AuthUser = auth('sanctum')->user()->id;

        $sessionAuth = Auth::user();

        $dquoPattern = '/(["]+)/i';
        $dquo = preg_replace($dquoPattern, "dquo", $sessionAuth);


        if(Auth::User()->type === 'user'){
        $onlyForUsersUploads = <<<EOD
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-address-card green"></i>
            <p>
              Store File
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link :to="{name: 'Requirement Files', params: { AuthUserId: $AuthUser } }" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Application Files</p>
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link :to="{name: 'FileUser', params: { AuthUserId: $AuthUser } }" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>Uploads</p>
          </router-link>
        </li>
        EOD;
        echo $onlyForUsersUploads;
        } else if(Auth::User()->type === 'admin') {
        $onlyForAdminManage = <<<EOD
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-cog green"></i>
            <p>
              Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/users" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Employees</p>
              </router-link>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-columns green"></i>
            <p>
              Categorized Files
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/post-res" class="nav-link">
                <i class="fas fa-user-tie"></i>
                <p>Résumé</p>
              </router-link>
            </li>
          </ul>
        </li>
        EOD;
        echo $onlyForAdminManage;
        }

        @endphp

        @php
        if(Auth::user()->type === 'user'){

        } else if(Auth::user()->type === 'admin') {
        $onlyForAdminDev = <<<EOD
        <li style="display:none" class="nav-item">
        <router-link to="/developer" class="nav-link">
         <i class="nav-icon fas fa-cogs"></i>
         <p>
           Developer
         </p>
        </router-link>
        </li>
        EOD;
        echo $onlyForAdminDev;
        }
        @endphp

        @php
        if(Auth::User()->type === 'admin'){
          $onlyForAdminProfile = <<<EOD
        <li class="nav-item">
          <router-link to="/profile" class="nav-link">
           <i class="nav-icon fas fa-user orange"></i>
           <p>
             Profile
           </p>
         </router-link>
        </li>
        EOD;
        echo $onlyForAdminProfile;
        } else if(Auth::User()->type === 'user') {
        $onlyForEmployeeProfile = <<<EOD
        <li class="nav-item">
          <router-link :to="{name: 'UserProfile', params: {AuthUserId: '$dquo' }}"

          class="nav-link">
           <i class="nav-icon fas fa-user orange"></i>
           <p>
             Profile
           </p>
         </router-link>
        </li>
        EOD;
        echo $onlyForEmployeeProfile;
        }
        @endphp

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
