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

  <nav class="navbar fixed-top navbar-expand-lg bg-white mb-5">
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
</nav>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 120vh">
  <div class="d-flex flex-column justify-content-between">
    <div class="row justify-content-center">

      <div class="col-lg-6 col-xl-12 col-md-10 ">
        <div class="card card-default mb-0">
          <div class="card-body px-5 pb-5 pt-5">
            <h4 class="text-dark text-center mb-5">Registrasi Admin Wisata</h4>

            <form class="admin_wisata" method="post" action="<?= base_url('authadmin/registration'); ?>">
              <div class="row">

                <div class="form-group col-md-4 mb-4">
                  <input type="text" class="form-control form-control-user" id="nama_wisata" name="nama_wisata" placeholder="Nama Wisata" value="<?= set_value('nama_wisata'); ?>">
                  <?= form_error('nama_wisata',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 mb-4">
                   <input type="text" class="form-control form-control-user" id="email_admin" name="email_admin" placeholder="E-mail" value="<?= set_value('email_admin'); ?>">
                  <?= form_error('email_admin',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4">
                   <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                  <?= form_error('password',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-6 ">
                   <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi Wisata" value="<?= set_value('deskripsi'); ?>"></textarea>
                   <?= form_error('deskripsi',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-6 ">
                   <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Lengkap"  value="<?= set_value('alamat'); ?>"></textarea>
                   <?= form_error('alamat',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                 <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="jam_operasional" name="jam_operasional"  placeholder="Jam Operasional" value="<?= set_value('jam_operasional'); ?>">
                  <?= form_error('jam_operasional',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="harga_tiket" name="harga_tiket"  placeholder="Harga Tiket Masuk" value="<?= set_value('harga_tiket'); ?>">
                  <?= form_error('harga_tiket',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="akses_jalan" name="akses_jalan"  placeholder="Akses Jalan" value="<?= set_value('akses_jalan'); ?>">
                  <?= form_error('akses_jalan',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="fasilitas" name="fasilitas"  placeholder="Fasilitas" value="<?= set_value('fasilitas'); ?>">
                  <?= form_error('fasilitas',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="kontak" name="kontak"  placeholder="Kontak" value="<?= set_value('kontak'); ?>">
                  <?= form_error('kontak',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="maps" name="maps"  placeholder="Link Google Maps" value="<?= set_value('maps'); ?>">
                  <?= form_error('maps',' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4 ">                         
                    <select class="form-control" id="kode_kategori_wisata" name="kode_kategori_wisata" value="<?= set_value('kode_kategori_wisata'); ?>" >
                        <option value="">--Pilih Kategori Wisata--</option>
                         <?php foreach($kategori_wisata as $ktw) : ?>
                        <option value="<?php echo $ktw->kode_kategori_wisata ?>">
                        <?php echo $ktw->nama_kategori_wisata ?></option>
                        <?php endforeach; ?>
                      <?= form_error('kategori',' <small class="text-danger pl-3">', '</small>'); ?>
                    </select>
                </div>

                 <div class="form-group col-md-4 ">
                  <input type="text" class="form-control input-lg" id="rekening" name="rekening"  placeholder="Rekening" value="<?= set_value('rekening'); ?>">
                  <?= form_error('rekening',' <small class="text-danger pl-3">', '</small>'); ?>
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
