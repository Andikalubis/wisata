<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('adminwisata/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 px-5">
      <div class="callout callout-info">
        <h5>Profil Wisata Harus Lengkap!</h5>
        <p>Mohon isi informasi dengan lengkap dan jelas.</p>
      </div>
      <div class="card ">
        <div class="card-body box-profile-unbordered">
          <div class="text-center">

            <div class="d-flex flex-column align-items-center text-center">
              <img src="<?= base_url('assets/img/profile/') . $admin_wisata['image']; ?>" alt="Admin"  width="150">
              <div class="mt-3">
                <h4><?= $admin_wisata['nama_wisata']; ?></h4>
                <p class="text-secondary mb-1"><?= $admin_wisata['email_admin']; ?></p>
                <p class="text-muted font-size-sm mb-1"><?= $admin_wisata['alamat']; ?></p>
                <p class="text-muted font-size-sm"><?= $admin_wisata['kontak']; ?></p>
                <a class="btn bg-lightblue " href="<?= base_url('adminwisata/edit_profil'); ?>">Edit data wisata</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>