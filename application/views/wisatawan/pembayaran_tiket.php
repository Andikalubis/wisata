<div class="bg0 m-t-150 p-b-100">
  <div class="container">
    <div class="container rounded bg-white mb-5">
      <div class="row">
        <div class="col-md-12">

          <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15  p-lr-0-lg">
                <a href="<?= base_url('wisatawan/home'); ?>" class="stext-109 cl8 hov-cl1 trans-04"> Home <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
                <span class="stext-109 cl4"><?= $title; ?></span>
            </div>
          </div>

          <form class="bg0 p-t-50 p-b-85">
            <div class="container">

                <div class="row">
                  <div class="col-sm-6 col-lg-6 col-xl-6 m-b-50">
                    <div class="bor10 p-lr-50 p-t-30 p-b-40   m-lr-0-xl p-lr-1-sm">
                      <h4 class="mtext-109 cl2 p-b-30">Invoice Pembayaran Tiket</h4>

                      <?php foreach($pesanan as $ps) ?>

                      <div class="flex-w flex-t bor12 p-b-13 ">
                          <div class="size-208">
                              <span class="stext-110 cl2">Nama Wisatawan</span>
                          </div>
                          <div class="size-209 p-lr-50">
                              <span class="mtext-110 cl2 "><?php echo $ps->name?></span>
                          </div>
                      </div>

                      <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 p-b-30">
                          <span class="stext-110 cl2 ">Nama Wisata</span>
                        </div>
                        <div class="size-209 p-lr-50">
                          <span class="mtext-110 cl2"><?php echo $ps->nama_wisata?></span>
                        </div>

                        <div class="size-208 p-b-30">
                          <span class="stext-110 cl2">Tanggal Order</span>
                        </div>
                        <div class="size-209">
                          <span class="mtext-110 cl2 p-lr-50"><?php echo $ps->tgl_order?></span>
                        </div>


                        <div class="size-208 p-b-30">
                          <span class="stext-110 cl2">Tanggal Booking</span>
                        </div>
                        <div class="size-209 p-lr-50">
                          <span class="mtext-110 cl2"><?php echo $ps->tgl_booking?></span>
                        </div>

                        <div class="size-208 p-b-30">
                          <span class="stext-110 cl2">Harga Tiket / Hari</span>
                        </div>
                        <div class="size-209 p-lr-50">
                          <span class="mtext-110 cl2">Rp. <?php echo number_format($ps->harga_tiket,0,',','.')?></span>
                        </div>

                        <div class="size-208 p-b-30">
                          <span class="stext-110 cl2">Jumlah Tiket</span>
                        </div>
                        <div class="size-209 p-lr-50">
                          <span class="mtext-110 cl2"><?php echo $ps->jumlah_tiket?> Tiket</span>
                        </div>
                        <h5 class="stext-110 cl2">Tiket berlaku sampai <?php echo $ps->tgl_selesai?> <?php echo $ps->waktu?></h5>
                      </div>



                      <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                          <span class="mtext-101 cl2">Total</span>
                        </div>
                        <div class="size-209 p-t-1 p-lr-50">
                          <span class="mtext-110 cl2">Rp. <?php echo number_format($ps->harga_tiket * $ps->jumlah_tiket,0,',','.')?> </span>
                        </div>
                      </div>

                      <a href="<?php echo base_url('wisatawan/cetak_invoice/'.$ps->id_tiket) ?>" class="flex-c-m stext-101 cl2 size-116 bg8 bor14 hov-btn3 p-lr-15 trans-04 pointer">Print Invoice<i class="fas fa-print mx-2"></i></a>
                    </div>
                  </div>

                  <div class="col-sm-6 col-lg-6 col-xl-5 m-b-50 m-l-50">
                    <div class="bor10 p-lr-50 p-t-30 p-b-40   m-lr-0-xl p-lr-1-sm">
                      <h4 class="mtext-112 cl2 p-b-30">Informasi Pembayaran</h4>
                      <?php foreach($pesanan as $ps) ?>
                      <div class="flex-w flex-t bor12">
                        <p class="stext-115 cl6 size-213">Nomor Rekening</p>
                      </div>

                      <div class="flex-w flex-t bor12 p-t-15 p-b-20">
                        <div class="size-208 p-b-30">
                            <span class="stext-110 cl2 "><?php echo $ps->rekening?></span>
                        </div>
                      </div>

                      <div class="flex-w flex-t p-t-15 p-b-30">
                      <?php

                          if(empty($ps->bukti_transfer)) { ?>
                              <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload bukti pembayaran<i class="fas fa-upload mx-2"></i></button>
                       <?php }elseif($ps->status_pembayaran == '0') { ?>
                          <button class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">Menunggu Konfirmasi<i class="far fa-clock mx-2"></i></button>
                      <?php }elseif($ps->status_pembayaran == '1') { ?>
                          <button class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">Pembayaran Selesai<i class="fa fa-check mx-2"></i></button>
                      <?php } ?>
                    </div>

                    <div class="row">
                    <h4 class="mtext-112 cl2 p-b-30">Informasi Checkout Wisata <?php echo $ps->nama_wisata ?> </h4>
                     <span class="mtext-101 cl2 p-b-20">Dear Wisatawan, Tiket yang kamu beli hanya berlaku untuk 1 hari saja sampai :</span>
                     
                     
                     <div class="size-208 p-b-10">
                      <span class="mtext-101 cl2">Tanggal</span>
                        </div>
                        <div class="size-209">
                          <span class="mtext-110 cl2 p-lr-20"><?php echo $ps->tgl_selesai?></span>
                        </div>
                     

                      <div class="size-208 p-b-30">
                          <span class="mtext-101 cl2">Waktu</span>
                        </div>
                        <div class="size-209">
                          <span class="mtext-110 cl2 p-lr-20"><?php echo $ps->waktu?></span>
                        </div>
                      </div>
                      <span class="mtext-101 cl2 p-b-20">Note : Jika akan menambah hari penginapan camping silahkan lakukan kembali checkout tiket.
                      Terimakasih</span>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload bukti pembayaran anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?php echo base_url('wisatawan/pembayaran_tiket_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Upload bukti pembayaran</label>
            <input type="hidden" name="id_tiket" class="form-control" value="<?php echo $ps->id_tiket ?>">
            <input type="file" name="bukti_transfer" class="form-control">
            <?php $waktu = date('H:i:s'); ?>
            <input type="hidden" name="waktu" value="<?php echo $waktu; ?>" class="form-control">
            <?php
            
            $tgl_selesai = date('Y-m-d', strtotime($ps->tgl_booking . ' +1 day'));
            ?>
            <input type="hidden" name="tgl_selesai" value="<?php echo $tgl_selesai; ?>" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
      </form>

    </div>
  </div>
</div>