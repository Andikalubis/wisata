
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-blue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center bg-blue">
      <span class="brand-text">A D M I N I S T R A T O R</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $administrator['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar user panel (optional) -->

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
          <li class="nav-item">
            <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link <?=$this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>   
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/wisata'); ?>" class="nav-link <?=$this->uri->segment(2) == 'wisata' ? 'active' : '' ?><?=$this->uri->segment(2) == 'detail_wisata' ? 'active' : '' ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Data Wisata
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/produk'); ?>" class="nav-link <?=$this->uri->segment(2) == 'produk' ? 'active' : '' ?>">
              <i class="nav-icon far fa-compass"></i>
              <p>
                Data Produk Outdoor
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/wisatawan'); ?>" class="nav-link <?=$this->uri->segment(2) == 'wisatawan' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Wisatawan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('kategori_wisata'); ?>" class="nav-link <?=$this->uri->segment(1) == 'kategori_wisata' ? 'active' : '' ?>">
              <i class="nav-icon far fa-list-alt"></i>
              <p>
                Data Kategori Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('kategori_outdoor'); ?>" class="nav-link <?=$this->uri->segment(1) == 'kategori_outdoor' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Data Kategori outdoor
              </p>
            </a>
          </li>

          <!-- 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
               Backup Data
              </p>
            </a>
          </li>
          -->
          
          <li class="nav-item">
            <a href="<?= base_url('authadmin1/logout'); ?>" class="nav-link" data-toggle="modal" data-target="#logoutModal">
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
  
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('authadmin1/logout'); ?>">Logout</a>
                </div>
              </div>
            </div>
          </div>

  <!-- Content Wrapper. Contains page content -->
  
    
     