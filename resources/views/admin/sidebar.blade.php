<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="http://dinsos.tasikmalayakota.go.id/wp-content/uploads/2019/08/LOGO-BARU-DINSOS.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://www.logolynx.com/images/logolynx/23/23938578fb8d88c02bc59906d12230f3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{URL::to('admin')}}" class="d-block">HAI MASTER</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                   <a href="{{URL::to('admin')}}" class="nav-link">
                       <i class="nav-icon fa fa-book"></i>
                       <p>POSTINGAN
                           <span class="right badge badge-danger"></span>
</p>
</a>
</li>

<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/pegawai')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/pegawai/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>edit prfile</p>
                </a>
              </li>   
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('admin')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                galery
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ganti password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/user/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>tambah User</p>
                </a>
              </li>
              </ul>
          </li>
     
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Layanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/page1')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/page2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page2</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page3')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page3</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page4')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page4</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page5')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page5</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page6')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page6</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page7')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page7</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page8')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page8</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page9')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page9</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page10')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page10</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page11')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page11</p>
                </a>
              </li><li class="nav-item">
                <a href="{{url('/page12')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>page12</p>
                </a>
              </li>   
            </ul>
          </li>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>