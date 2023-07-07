
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-teal">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <span>
      Cirebon, <?php echo date('d F Y || H:i:s') ?>
    </span>
  </nav>

  <aside class="main-sidebar sidebar-light-teal elevation-4">
    <div href="" class="brand-link text-center bg-teal">
      <span class="brand-text">A D M I N   W I S A T A</span>
    </div>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <h4 ><?= $admin_wisata['nama_wisata']; ?></h4>
        </div>
      </div>

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

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('adminwisata/dashboard'); ?>" class="nav-link <?=$this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>   
          </li>

          <li class="nav-item">
            <a href="<?= base_url('adminwisata/profilwisata'); ?>" class="nav-link <?=$this->uri->segment(2) == 'profilwisata' ? 'active' : '' ?> <?=$this->uri->segment(2) == 'edit_profil' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola Profil Wisata
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('adminwisata/dataproduk'); ?>" class="nav-link <?=$this->uri->segment(2) == 'dataproduk' ? 'active' : '' ?>  <?=$this->uri->segment(2) == 'update_produk' ? 'active' : '' ?>  <?=$this->uri->segment(2) == 'tambah_produk' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Kelola Produk Outdoor
              </p>
            </a>
          </li>

         <li class="nav-item">
          <a href="<?= base_url('adminwisata/tiket_wisata'); ?>" class="nav-link <?=$this->uri->segment(2) == 'tiket_wisata' ? 'active' : '' ?> <?=$this->uri->segment(2) == 'pembayaran_tiket' ? 'active' : '' ?>">
            <i class="fas fa-tags nav-icon"></i>
            <p>Tiket Wisata</p>
          </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('adminwisata/sewa_outdoor'); ?>" class="nav-link <?=$this->uri->segment(2) == 'sewa_outdoor' ? 'active' : '' ?> ">
            <i class="fas fa-campground nav-icon"></i>
            <p>Sewa Outdoor</p>
          </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('laporan/filter'); ?>" class="nav-link <?=$this->uri->segment(2) == 'filter' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('authadmin/logout'); ?>" class="nav-link" data-toggle="modal" data-target="#logoutModal">
             <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>       
        </ul>
      </nav>
    </div>
  </aside>
  
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
              <a class="btn btn-primary" href="<?= base_url('authadmin/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

  
    
     