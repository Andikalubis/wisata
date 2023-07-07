<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Produk Outdoor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('adminwisata/dashboard'); ?>">Admin</a></li>
            <li class="breadcrumb-item active">Data Produk</li>
          </ol>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header bg-teal">
                <h3 class="card-title">Tambah Data Produk Outdoor</h3>
              </div>

              <div class="card-body">

                <?php foreach ($outdoor as $od) : ?>

                <form method="POST" action="<?php echo base_url('adminwisata/update_produk_aksi') ?>" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kategori Produk</label>
                      <input type="hidden" name="id_produk" value="<?php echo $od->id_produk ?>">
                      <select name="kode_kategori" class="form-control">
                        <option value="<?php echo $od->kode_kategori ?>"><?php echo $od->kode_kategori ?></option>
                        <?php foreach($kategori_outdoor as $ktg) : ?>
                        <option value="<?php echo $ktg->kode_kategori ?>">
                          <?php echo $ktg->nama_kategori ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php echo form_error('kode_kategori','<div class="text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" name="nama_produk" class="form-control" value="<?php echo $od->nama_produk ?>">
                      <?php echo form_error('nama_produk','<div class="text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                      <label>Deskripsi Produk</label>
                      <input type="text" name="deskripsi_produk" class="form-control" value="<?php echo $od->deskripsi_produk ?>">
                      <?php echo form_error('deskripsi_produk','<div class="text-danger"></div>') ?>
                    </div>
                  </div>
                        
                  <div class="col-md-6">
                     <div class="form-group">
                      <label>Harga Sewa Perhari</label>
                      <input type="text" name="harga_sewa" class="form-control" value="<?php echo $od->harga_sewa ?>">
                      <?php echo form_error('harga_sewa','<div class="text-danger"></div>') ?>
                    </div>
                 
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option <?php if($od->status == "1"){echo "selected='selected'";} echo $od->status; ?> value="1">Tersedia</option>
                         <option <?php if($od->status == "0"){echo "selected='selected'";} echo $od->status; ?> value="0">Tidak Tersedia</option>
                      </select>
                      <?php echo form_error('status','<div class="text-danger"></div>') ?>
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="gambar" class="form-control">
                      <?php echo form_error('gambar','<div class="text-danger"></div>') ?>
                    </div>
                    
                    <button type="reset" class="btn bg-maroon float-right mt-3">Reset</button>
                    <button type="submit" class="btn bg-lightblue float-right mx-2 mt-3">Simpan</button>
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
</div>