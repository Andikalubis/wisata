<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/');?>dist/css/adminlte.min.css">
  <link rel="icon" type="image/png" href="<?=base_url('assets2/');?>images/icons/favicon.png"/>
</head>

<body class="hold-transition register-page">

  <nav class="navbar fixed-top navbar-expand-lg bg-white">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="<?= base_url('beranda'); ?>">
         <img src="<?=base_url('assets2/');?>images/icons/mylogo1.png" alt="Logo" width="150" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="">
          <a class="nav-link nav-item">
           
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">

              <div class="col-lg-6 col-xl-6 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-body px-5 pb-5 pt-5">
                    <h4 class="text-dark text-center mb-5">Registrasi Administrator</h4>

                     <form class="user" method="post" action="<?= base_url('authadmin1/regis'); ?>">
                      <div class="row">

                        <div class="form-group col-md-12">
                          <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Admin" value="<?= set_value('name'); ?>">
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


<!-- jQuery -->
<script src="<?=base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/');?>js/adminlte.min.js"></script>
</body>
</html>