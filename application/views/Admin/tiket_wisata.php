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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-teal">
              <h3 class="card-title"><?= $title; ?></h3>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
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
                   foreach($pesanan as $ps) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $ps->email ?></td>
                      <td><?php echo $ps->tgl_order ?></td>
                      <td><?php echo $ps->tgl_booking ?></td>
                      <td>Rp. <?php echo number_format($ps->harga_tiket,0,',','.')?></td>
                      <td><?php echo $ps->jumlah_tiket ?> Tiket</td>
                      <td>Rp. <?php echo number_format($ps->jumlah_tiket * $ps->harga_tiket,0,',','.') ?></td>
                      <td><?php echo $ps->no_hp ?></td>
                      <td><?php echo $ps->alamat_wisatawan ?></td>
                      <td>
                        <center>
                          <?php
                          if(empty($ps->bukti_transfer)) {?>
                            <button class="btn btn-sm btn-danger">Belum transfer</i></button>
                            <?php }else{ ?>
                              <a class="btn bg-lightblue" href="<?php echo base_url('adminwisata/pembayaran_tiket/'.$ps->id_tiket) ?>">Cek Transfer</a>
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
    </div>
  </section>
</div>
