<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/');?>dist/css/adminlte.min.css">
  <link rel="icon" type="image/png" href="<?=base_url('assets2/');?>images/icons/favicon.png"/>
</head>

<body class="hold-transition register-page">

  <nav class="navbar fixed-top navbar-expand-lg bg-white">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="<?= base_url('beranda'); ?>">
         <img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="Logo" width="150" height="50">
    </a>
 <div class=" dropdown">
        <a class="nav-link" data-toggle="dropdown">
          <button type="button" class="btn btn-outline-primary btn-sm">Login Sebagai</button>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('auth'); ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Wisatawan
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('authadmin'); ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Admin Wisata
          </a>
      </div>
  </div>
  </div>
</nav>


<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
  <div class="d-flex flex-column justify-content-between">
    <div class="row justify-content-center">

      <div class="col-lg-6 col-xl-6 col-md-10 ">
        <div class="card card-default mb-0">
          <div class="card-body px-5 pb-5 pt-5">
            <h4 class="text-dark text-center mb-5">Registrasi Wisatawan</h4>

             <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
              <div class="row">

                <div class="form-group col-md-12">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Wisatawan" value="<?= set_value('name'); ?>">
                  <?= form_error('name',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-12">
                   <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="E-mail" value="<?= set_value('email'); ?>">
                  <?= form_error('email',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-12">
                   <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-12">
                   <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                </div>

                 <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-pill mb-4">Registrasi</button>
                </div>
              </div>
            </form>

            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/');?>js/adminlte.min.js"></script>
</body>
</html>