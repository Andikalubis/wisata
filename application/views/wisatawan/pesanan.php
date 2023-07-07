<div class="bg0 m-t-150 p-b-100">
  <div class="container">
    <div class="container rounded bg-white mb-5">
      <div class="row">
        <div class="col-md-12">

          <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15  p-lr-0-lg p-b-50">
              <a href="<?= base_url('wisatawan/home'); ?>" class="stext-120 cl8 hov-cl1 trans-04">
                Home <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
              </a>
              <span class="stext-120 cl4"><?= $title; ?></span>
            </div>
          </div>

          <?= $this->session->flashdata('pesan'); ?>

          <form class="bg0 p-b-85">
            <div class="container">
              <h4 class="mtext-109 cl2 m-l-25 m-r--38 m-lr-0-xl m-b-25">
                Pesanan Tiket Wisata
              </h4>

            <div class="row">               
              <div class=" col-xl-12 m-b-50">
                <div class="m-l-10 m-r--38 m-lr-0-xl">
                  <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart">
                      <tr class="table_head">
                        <th class="column-1">No</th>
                        <th>Nama</th>
                        <th>Tanggal Order</th>
                        <th>Nama Wisata</th>
                        <th>Harga Tiket</th>
                        <th>Jumlah Tiket</th>
                        <th>Action</th>
                      </tr>

                      <?php $no=1; foreach($pesanan as $ps) : ?>

                      <tr class="table_row">
                        <td class="column-1"><?php echo $no++ ?></td>
                        <td><?php echo $ps->name ?></td>
                        <td><?php echo $ps->tgl_order ?></td>
                        <td><?php echo $ps->nama_wisata?></td>
                        <td>Rp. <?php echo number_format($ps->harga_tiket,0,',','.')?></td>
                        <td><?php echo $ps->jumlah_tiket?> Tiket</td>
                        <td class="p-lr-10">
                            <?php if($ps->status_pembayaran == '1') { ?>
                                <a href="<?php echo base_url('wisatawan/pembayaran_tiket/'.$ps->id_tiket) ?>"  class="btn btn-sm bg-lightblue">Pembayaran Selesai</a>

                            <?php } else { ?>
                                <a href="<?php echo base_url('wisatawan/pembayaran_tiket/'.$ps->id_tiket) ?>" class="btn btn-sm bg-purple">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                      </tr>

                      <?php endforeach; ?>

                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>

        <form class="bg0 p-b-85">
          <div class="container">
            <h4 class="mtext-109 cl2 m-l-25 m-r--38 m-lr-0-xl m-b-25">
              Pesanan Sewa Outdoor
            </h4>

            <div class="row">              
              <div class=" col-xl-12 m-b-50">
                <div class="m-l-10 m-r--38 m-lr-0-xl">
                  <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart">
                      <tr class="table_head">
                        <th class="column-1">No</th>
                        <th>Nama</th>
                        <th>Tanggal Order</th>
                        <th>Nama Produk</th>                                   
                        <th>Harga Sewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Selesai</th>
                        <th>Action</th>
                      </tr>

                      <?php $no=1; foreach($sewa as $sw) : ?>

                      <tr class="table_row">
                        <td class="column-1"><?php echo $no++ ?></td>
                        <td><?php echo $sw->name ?></td>
                        <td><?php echo $sw->tgl_order_sewa ?></td>
                        <td><?php echo $sw->nama_produk ?></td>
                        <td>Rp. <?php echo number_format($sw->harga_sewa,0,',','.')?></td>
                        <td><?php echo $sw->tgl_sewa ?></td>
                        <td><?php echo $sw->tgl_kembali ?></td>
                        <td class="p-lr-10">
                          <?php 
                          if(empty($sw->alamat_sewa)) { ?>
                              <span class='text-danger text-bold'> Belum Checkout </span>
                            <?php }elseif($sw->status_bayar == '1') { ?>
                                <a href="<?php echo base_url('wisatawan/pembayaran_sewa/'.$sw->id_sewa) ?>" class="btn btn-sm bg-lightblue">Pembayaran Selesai</a>
                            <?php }else{ ?>
                                <a href="<?php echo base_url('wisatawan/pembayaran_sewa/'.$sw->id_sewa) ?>" class="btn btn-sm bg-purple">Cek Pembayaran</a>
                            <?php } ?>
                        </td>                          
                      </tr>

                      <?php endforeach; ?>

                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
