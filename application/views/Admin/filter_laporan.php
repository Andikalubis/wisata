<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-teal">
              <h3 class="card-title"><?= $title; ?></h3>
            </div>

            <div class="card-body">

            <form method="POST" action="<?= base_url('laporan/filter'); ?>">

              <div class="row mt-3">
                <div class="col-md-12 pb-2">
                    <label>Dari Tanggal</label>
                    <input type="date" class="form-control" name="dari">
                    <?= form_error('dari',' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12 pb-2">
                    <label>Sampai Tanggal</label>
                    <input type="date" class="form-control" name="sampai">
                    <?= form_error('sampai',' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>

              <button type="submit" class="btn bg-lightblue float-left mt-3"><i class="fas fa-eye mx-1"></i>Tampilkan Data</button>

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>