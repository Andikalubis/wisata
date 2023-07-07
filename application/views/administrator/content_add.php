<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      
    </div>

    <div class="card">
      <div class="card-header bg-blue">
          <h3 class="card-title"><?= $title; ?></h3>
      </div>
      <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/tambah_content_aksi') ?>
        " enctype="multipart/form-data">
        <div class="row">               
          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control">
              <?php echo form_error('deskripsi','<div class="text-danger"></div>') ?>
            </div>

            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control">
              <?php echo form_error('gambar','<div class="text-danger"></div>') ?>
            </div>

            <div class="form-group">
              <label>Level</label>
              <select name="level" class="form-control">
                <option value="">--Level--</option>
                <option value="1">Atas</option>
                <option value="0">Bawah</option>
              </select>
              <?php echo form_error('level','<div class="text-danger"></div>') ?>
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