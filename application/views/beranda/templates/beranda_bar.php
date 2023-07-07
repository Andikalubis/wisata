
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    
                    <!-- Logo desktop -->       
                    <a href="<?= base_url('Beranda/home'); ?>" class="logo">
                        <img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="<?= base_url('Beranda'); ?>">Home</a>
                            </li>
                        
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <a href="#" class="nav-link dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" data-toggle="dropdown" href="#">
                            <h5 class="pb-3">Login</h5>                           
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= base_url('Auth'); ?>" class="dropdown-item js-show-cart">
                                <i class="fas fa-user mr-2"></i> Login Sebagai Wisatawan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('AuthAdmin'); ?>" class="dropdown-item">
                                <i class="fas fa-user mr-2"></i> Login Sebagai Admin Wisata
                            </a>
                        </div>                       
                    </div>
            </nav>
        </div>
    </div>

        

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->        
            <div class="logo-mobile">
                <a href="index.html"><img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">             
                <a href="#" class="nav-link dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" data-toggle="dropdown" href="#">
                    <h5 class="pb-3">Login</h5> 
                </a>
                <div class="dropdown-menu drop dropdown-menu-right ">
                    <a href="<?= base_url('Auth'); ?>" class="dropdown-item js-show-cart">
                        <i class="fas fa-user mr-2"></i> Login Sebagai Wisatawan
                    </a>
                <div class="dropdown-divider"></div>
                    <a href="<?= base_url('AuthAdminn'); ?>" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i> Login Sebagai Admin Wisata
                    </a>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                <li class="active-menu">
                    <a href="<?= base_url('Beranda'); ?>">Home</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
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
