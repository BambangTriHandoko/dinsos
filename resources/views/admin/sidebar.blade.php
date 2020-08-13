<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('forms-admin')}}" class="brand-link">
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
          <a href="{{URL::to('forms-admin')}}" class="d-block">HAI Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
     
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Postingan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{URL::to('forms-admin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BERITA</p>
                </a>
              
                <li class="nav-item">
              <a href="{{URL::to('admin/geo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VISUALISASI</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/gallery/image-gallery')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>kategori</p>
                </a>
              </li>
              </ul>
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
                  <p>tambah pegawai</p>
                </a>
              </li>   
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                KELOLA USER
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>