
<header>
  <div class="container-menu-desktop">
    <div class="wrap-menu-desktop">
      <nav class="limiter-menu-desktop container">
        <a href="<?= base_url('wisatawan/home'); ?>" class="logo">
          <img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="IMG-LOGO">
        </a>

        <div class="menu-desktop">
          <ul class="main-menu">
            <li <?=$this->uri->segment(2) == 'home' ? 'class="active-menu"' : '' ?>>
              <a href="<?= base_url('wisatawan/home'); ?>">Home</a>
            </li>

            <li <?=$this->uri->segment(2) == 'wisata' ? 'class="active-menu"' : '' ?>>
              <a href="<?= base_url('wisatawan/wisata'); ?>">Wisata</a>
            </li>

            <li <?=$this->uri->segment(2) == 'kategori' ? 'class="active-menu"' : '' ?>>
              <a href="<?= base_url('wisatawan/kategori'); ?>">Kategori</a>
            </li>

            <li <?=$this->uri->segment(2) == 'pesanan' ? 'class="active-menu"' : '' ?>
              <?=$this->uri->segment(2) == 'pembayaran_tiket' ? 'class="active-menu"' : '' ?>>
              <a href="<?= base_url('wisatawan/pesanan'); ?>">Pesanan Saya</a>
            </li>
          </ul>
        </div>

        <div class="wrap-icon-header flex-w flex-r-m">
          <a href="<?= base_url('wisatawan/cart'); ?>" class="icon-header-item <?=$this->uri->segment(2) == 'cart' ? 'active-menu' : '' ?>cl2 hov-cl1 trans-04 p-l-22 p-r-11">
            <i class="zmdi zmdi-shopping-cart"></i>
          </a>
          <a href="#" class="nav-link dis-block icon-header-item <?=$this->uri->segment(2) == 'profil' ? 'active-menu' : '' ?>cl2 hov-cl1 trans-04 p-r-11 p-l-10" data-toggle="dropdown" href="#">
            <i class="zmdi zmdi-face"></i>
            <h5 class="float-right px-2"><?= $user['name']; ?></h5>
          </a>
           <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= base_url('wisatawan/profil'); ?>" class="dropdown-item js-show-cart">
                <i class="fas fa-user mr-2"></i>Profil Akun
              </a>
            <div class="dropdown-divider"></div>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="wrap-header-mobile">
    <div class="logo-mobile">
      <a href="index.html"><img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="IMG-LOGO"></a>
    </div>
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <a href="<?= base_url('wisatawan/cart'); ?>" class="icon-header-item <?=$this->uri->segment(2) == 'cart' ? 'active-menu' : '' ?>cl2 hov-cl1 trans-04 p-l-22 p-r-11">
        <i class="zmdi zmdi-shopping-cart"></i>
      </a>

      <a href="#" class="nav-link dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" data-toggle="dropdown" href="#">
        <i class="zmdi zmdi-face"></i>
        <h5 class="float-right px-2"><?= $user['name']; ?></h5>
      </a>
      <div class="dropdown-menu drop dropdown-menu-right ">
        <a href="<?= base_url('wisatawan/profil'); ?>" class="dropdown-item js-show-cart">
          <i class="fas fa-user mr-2"></i>Profil Akun
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </a>
      </div>
    </div>
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
  </div>

  <div class="menu-mobile">
    <ul class="main-menu-m">
      <li <?=$this->uri->segment(2) == 'home' ? 'class="active-menu"' : '' ?>>
          <a href="<?= base_url('wisatawan/home'); ?>">Home</a>
      </li>
      <li <?=$this->uri->segment(2) == 'wisata' ? 'class="active-menu"' : '' ?>>
          <a href="<?= base_url('wisatawan/wisata'); ?>">Wisata</a>
      </li>
      <li <?=$this->uri->segment(2) == 'kategori' ? 'class="active-menu"' : '' ?>>
          <a href="<?= base_url('wisatawan/kategori'); ?>">Kategori</a>
      </li>
      <li <?=$this->uri->segment(2) == 'pesanan' ? 'class="active-menu"' : '' ?> <?=$this->uri->segment(2) == 'pembayaran_tiket' ? 'class="active-menu"' : '' ?>>
        <a href="<?= base_url('wisatawan/pesanan'); ?>">Pesanan Saya</a>
      </li>
    </ul>
  </div>

  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
      <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
        <img src="<?=base_url('assets2/');?>images/icons/icon-close2.png" alt="CLOSE">
      </button>

      <form class="wrap-search-header flex-w p-l-15">
        <button class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
          <input class="plh3" type="text" name="search" placeholder="Search...">
      </form>
    </div>
  </div>
</header>
