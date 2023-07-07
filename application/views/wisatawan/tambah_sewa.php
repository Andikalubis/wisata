<div class="bg0 m-t-150 p-b-100">
  <div class="container">
    <div class="container rounded bg-white mb-5">
      <div class="row">
        <div class="col-md-12">

          <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15  p-lr-0-lg p-b-50">
              <a href="<?= base_url('wisatawan/home'); ?>" class="stext-120 cl8 hov-cl1 trans-04"> Home <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
              </a>
              <span class="stext-120 cl4"><?= $title; ?></span>
            </div>
          </div>

          <section class="bg0 p-b-85">
            <div class="container">
              <h4 class="mtext-109 cl2 m-l-25 m-r--38 m-lr-0-xl m-b-25">
                Form Sewa Outdoor
              </h4>
              <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">

                  <?php foreach($detail as $dt) : ?>

                    <form method="POST" action="<?php echo base_url('wisatawan/tambah_sewa_aksi') ?>">

                      <span class="mtext-110 cl2">
                        Harga Sewa / Hari
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="hidden" name="id_sewa" class="form-control" value="<?php echo $dt->id_sewa ?>">
                        <input type="hidden" name="id_wisata" value="<?php echo $dt->id_wisata ?>">
                        <input type="hidden" name="rekening" value="<?php echo $dt->rekening ?>">
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control" name="harga_sewa" value="<?php  echo $dt->harga_sewa ?>" readonly>
                      </div>
                      <span class="mtext-110 cl2">
                          Tanggal Order
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <?php $currentDateTime = date('Y-m-d'); ?>
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" name="tgl_order_sewa" value="<?php echo $currentDateTime; ?>" readonly>
                      </div>
                      <span class="mtext-110 cl2">
                        Tanggal Sewa Outdoor
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="tgl_sewa">
                      </div>
                      <span class="mtext-110 cl2">
                        Tanggal Selesai Sewa
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="tgl_kembali">
                      </div>                        
                      <span class="mtext-110 cl2">
                        Nomor WA
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="no_tlp">
                      </div>
                      <span class="mtext-110 cl2">
                        Alamat Wisatawan
                      </span>
                      <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-115 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="alamat_sewa">
                      </div>

                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Sewa
                        </button>

                    </form>

                     <?php endforeach; ?>

                   </div>
                 </div>
               </div>
             </section>

           </div>
         </div>
       </div>
     </div>
   </div>
