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

              <button type="submit" class="btn bg-lightblue float-left mt-3 mb-3"><i class="fas fa-eye mx-1"></i>Tampilkan Data</button>

            </form>

            <div class="table-responsive">
                <table class="table table-bordered">

                  <div class="btn-group">
                    <a class="btn btn-sm btn-danger mb-3" target="_blank" href="<?php echo base_url().'laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print mx-1"></i>Print</a>
                  </div>
                  
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Customer</th>
                      <th>Tanggal Order</th>
                      <th>Tanggal Booking</th>
                      <th>Harga Tiket</th>
                      <th>Jumlah Tiket</th>
                      <th>Total Pembayaran</th>
                      <th>Nomor WA</th>
                      <th>Alamat Wisatawan</th>
                      <th>Cek Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $no=1;
                   foreach($laporan as $lp) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $lp->email ?></td>
                      <td><?php echo $lp->tgl_order ?></td>
                      <td><?php echo $lp->tgl_booking ?></td>
                      <td>Rp. <?php echo number_format($lp->harga_tiket,0,',','.')?></td>
                      <td><?php echo $lp->jumlah_tiket ?> Tiket</td>
                      <td>Rp. <?php echo number_format($lp->jumlah_tiket * $lp->harga_tiket,0,',','.') ?></td>
                      <td><?php echo $lp->no_hp ?></td>
                      <td><?php echo $lp->alamat_wisatawan ?></td>
                      <td>
                        <center>
                          <?php
                          if(empty($lp->bukti_transfer)) {?>
                            <button class="btn btn-sm btn-danger">Belum transfer</i></button>
                            <?php }else{ ?>
                              <a class="btn bg-lightblue" href="<?php echo base_url('adminwisata/pembayaran_tiket/'.$lp->id_tiket) ?>">Cek Transfer</a>
                              <?php } ?>
                        </center>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>