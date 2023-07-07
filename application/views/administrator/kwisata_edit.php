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
              <h3 class="card-title">Tambah Data Produk Outdoor</h3>
            </div>
            <div class="card-body">

              <?php foreach ($kategori_wisata as $k) : ?>
                <form method="POST" action="<?php echo base_url('kategori_wisata/update_kategori_aksi') ?>"enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kode Kategori Wisata</label>
                        <input type="text" name="kode_kategori_wisata" class="form-control" value="<?php echo $k->kode_kategori_wisata ?>">
                        <?php echo form_error('kode_kategori_wisata','<div class="text-danger"></div>') ?>
                      </div>

                      <div class="form-group">
                        <label>Nama Kategori Wisata</label>
                        <input type="text" name="nama_kategori_wisata" class="form-control" value="<?php echo $k->nama_kategori_wisata ?>">
                        <?php echo form_error('nama_kategori_wisata','<div class="text-danger"></div>') ?>
                      </div>

                      <button type="submit" class="btn btn-primary float-right mx-2 mt-3">Simpan</button>

                    </div>
                  </div>
                </form>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
