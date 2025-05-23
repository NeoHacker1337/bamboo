
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('backend/asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                 
              </p>
            </a>
             
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.slider') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Slider
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.category.porfolio') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Porfolio Category
              </p>
            </a>
          </li>

          

          <li class="nav-item">
            <a href="{{ route('admin.porfolio') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Porfolio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.profile')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.logout') }}"               
                class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
        

           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
