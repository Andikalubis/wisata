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
                      <th>Nama Produk</th>
                      <th>Deskripsi Produk</th>
                      <th>Tanggal Sewa</th>
                      <th>Tanggal Selesai</th>
                      <th>Harga Sewa</th>
                      <th>Jumlah Hari</th>
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
                      <td><?php echo $ps->tgl_order_sewa ?></td>
                      <td><?php echo $ps->nama_produk ?></td>
                      <td><?php echo $ps->deskripsi_produk ?></td>
                      <td><?php echo $ps->tgl_sewa ?></td>
                      <td><?php echo $ps->tgl_kembali ?></td>
                      <td>Rp. <?php echo number_format($ps->harga_sewa,0,',','.')?></td>
                      <td>
                        <?php
                          $x = strtotime($ps->tgl_kembali);
                          $y = strtotime($ps->tgl_sewa);
                          $jmlHari = abs(($x - $y)/(60*60*24));
                        ?>
                        <?php echo $jmlHari?> Hari
                      </td>
                      <td>Rp. <?php echo number_format($ps->harga_sewa *$jmlHari,0,',','.')?></td>
                      <td><?php echo $ps->no_tlp ?></td>
                      <td><?php echo $ps->alamat_sewa ?></td>
                      <td>
                        <center>
                          <?php
                          if(empty($ps->bukti_sewa)) {?>
                            <button class="btn btn-sm btn-danger">Belum transfer</i></button>
                            <?php }else{ ?>
                              <a class="btn btn-sm bg-lightblue" href="<?php echo base_url('adminwisata/pembayaran_sewa/'.$ps->id_sewa) ?>">Cek Transfer</a>
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
