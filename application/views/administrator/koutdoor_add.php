<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-red">
            <h3 class="card-title"><?= $title; ?></h3>
          </div>
          <div class="card-body">

            <form method="POST" action="<?php echo base_url('kategori_outdoor/tambah_kategoriO_aksi') ?>" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Kode Kategori Outdoor</label>
                    <input type="text" name="kode_kategori" class="form-control">
                    <?php echo form_error('kode_kategori','<div class="text-danger"></div>') ?>
                  </div>

                  <div class="form-group">
                    <label>Nama Kategori Outdoor</label>
                    <input type="text" name="nama_kategori" class="form-control">
                    <?php echo form_error('nama_kategori','<div class="text-danger"></div>') ?>
                  </div>

                  <button type="reset" class="btn btn-danger float-right mt-3">Reset</button>
                  <button type="submit" class="btn btn-primary float-right mx-2 mt-3">Simpan</button>
                </div>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</div>
