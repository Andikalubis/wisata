<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('adminwisata/dashboard'); ?>">Home</a></li>
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
            <div class="card-header bg-pink">
              <h3 class="card-title"><?= $title; ?></h3>
            </div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('adminwisata/cek_pembayaran') ?>">

                  <?php foreach($pembayaran as $pb) : ?>

                    <center>

                    <a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('adminwisata/download_pembayaran/'.$pb->id_tiket) ?>"><i class="fas fa-download">   Download bukti pembayaran</i></a>

                    <div class="custom-control custom-switch mb-3">
                      <input type="hidden" class="custom-control-input" value="<?php echo $pb->id_tiket ?>" name="id_tiket">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                      <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                    <?php endforeach; ?>

                  </center>

                  </form>
                </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </div>