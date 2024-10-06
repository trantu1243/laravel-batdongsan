<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->



            <li class="nav-item">
                <a href="/admin" class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ Route::currentRouteName() == 'admin.real-state' || Route::currentRouteName() == 'show-pending' ? 'menu-open' : '' }}">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>Bất động sản
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/real-state" class="nav-link {{ Route::currentRouteName() == 'admin.real-state' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Tất cả</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/pending/real-state" class="nav-link {{ Route::currentRouteName() == 'show-pending' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Danh sách duyệt</p>
                        </a>
                    </li>



                    {{-- <li class="nav-item">
                        <a href="/admin/setting/code" class="nav-link {{ Route::currentRouteName() == 'show-code' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Thêm code</p>
                        </a>
                    </li> --}}

                </ul>

            </li>

            <li class="nav-item {{ Route::currentRouteName() == 'admin.news' || Route::currentRouteName() == 'admin.add-news' ? 'menu-open' : '' }}">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>Tin tức
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/news" class="nav-link {{ Route::currentRouteName() == 'admin.news' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Tất cả</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/add-news" class="nav-link {{ Route::currentRouteName() == 'admin.add-news' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Thêm tin tức</p>
                        </a>
                    </li>



                    {{-- <li class="nav-item">
                        <a href="/admin/setting/code" class="nav-link {{ Route::currentRouteName() == 'show-code' ? 'active' : '' }}">
                            <i class="fa fa-genderless nav-icon"></i>
                            <p>Thêm code</p>
                        </a>
                    </li> --}}

                </ul>

            </li>


            <li class="nav-header">ACTIONS</li>
            <li class="nav-item">
                <a href="/admin/logout" class="nav-link">
                    <i class="nav-icon fa fa-sign-out"></i>
                    <p>Đăng xuất</p>
                </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
