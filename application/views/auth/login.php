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

<body class="hold-transition login-page">

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

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b> Administrator </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg mb-3">Silahkan Login</p>

      <?= $this->session->flashdata('message'); ?>

      <form class="administrator" action="<?= base_url('authadmin1'); ?>" method="post">

        <div class="form-group col-md-12 pl-0">
          <input type="text" class="form-control" placeholder="Email" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>"> 
           <?= form_error('email',' <small class="text-danger">', '</small>'); ?>   
        </div>

        <div class="form-group col-md-12 pl-0">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" placeholder="Password">
          <?= form_error('password',' <small class="text-danger">', '</small>'); ?>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/');?>dist/js/adminlte.min.js"></script>

</div>
</body>
</html>

     