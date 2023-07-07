<div class="bg0 m-t-150 p-b-100">
    <div class="container">

      <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15  p-lr-0-lg p-b-50">
          <a href="<?= base_url('wisatawan/home'); ?>" class="stext-120 cl8 hov-cl1 trans-04"> Home <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
          </a>
          <span class="stext-120 cl4"><?= $title; ?></span>
        </div>
        </div>

        <?php foreach ($detailwisata as $dt) : ?>

          <div class="flex-w flex-sb-m p-b-30 ">
            <div class="p-b-10">
              <h3 class="ltext-103 cl5">
                <?php echo $dt->nama_wisata ?>
              </h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card" style="max-width: 540px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo base_url('assets/img/profile/'.$dt->image) ?>" class="card-img-top" alt="..." style="width: 600px; height: 300px; object-fit: cover;">
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <h5 class="card-title-center pb-2 mtext-110 cl2">Tentang Wisata</h5>
                  <p class="card-text stext-115 cl6 "><?php echo $dt->deskripsi ?></p>
                </div>
              </div>
              <a href="<?= base_url('wisatawan/tambah_tiket/').$dt->id_wisata ?>">
                <button  class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer " type="button" >pesan tiket sekarang</button>
              </a>
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title-center mtext-110 cl2">Alamat</h5>
                    <p class="card-text stext-115 cl6"><?php echo $dt->alamat ?></p>
                    <p> <a href="<?php echo $dt->maps ?>" class="stext-115">Lihat detail lokasi</a> </p>
                  <h5 class="card-title-center mtext-110 cl2">Jam Operasional</h5>
                    <p class="card-text stext-115 cl6"><?php echo $dt->jam_operasional ?></p>
                  <h5 class="card-title-center mtext-110 cl2">Harga Tiket</h5>
                    <p class="card-text stext-115 cl6">Rp. <?php echo number_format($dt->harga_tiket,0,',','.') ?></p>
                  <h5 class="card-title-center mtext-110 cl2">Akses Jalan</h5>
                    <p class="card-text stext-115 cl6"><?php echo $dt->akses_jalan ?></p>
                  <h5 class="card-title-center mtext-110 cl2">Fasilitas</h5>
                    <p class="card-text stext-115 cl6"><?php echo $dt->fasilitas ?></p>
                  <h5 class="card-title-center mtext-110 cl2"> Info Lebih Lanjut Silahkan Hubungi Kontak</h5>
                    <p class="card-text stext-115 cl6"><?php echo $dt->kontak ?></p>
                </div>
              </div>
            </div>
          </div>

            <?php endforeach; ?>

    <div class="flex-w flex-sb-m pt-5">
      <div class="p-t-20">
        <h3 class="ltext-103 cl5">SEWA PRODUK OUTDOOR</h3>
      </div>
    </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">

    <?php foreach ($outdoor as $od) : ?>

  <div class="col-md-3 pb-3">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/upload/'.$od->gambar) ?>" class="card-img-top" alt="..." style="width: 268px; height: 180px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title-center pb-2 txt-center "><?php echo $od->nama_produk ?></h5>
        <p class="card-text txt-center mtext-110 cl2 "><?php echo $od->deskripsi_produk ?></p>
        <h5 class="card-title-center pt-2 txt-center text-success mtext-110 cl2">Rp. <?php echo number_format($od->harga_sewa,0,',','.') ?> / Hari</h5>
      </div>
      <div class="card-footer">

        <form method="post" action="<?php echo base_url('wisatawan/add_cart'); ?>">
          <input type="hidden" name="id_wisata" value="<?php echo $od->id_wisata ?>" />
          <input type="hidden" name="email_admin" value="<?php echo $od->email_admin ?>" />
          <input type="hidden" name="id_produk" value="<?php echo $od->id_produk ?>" />
          <input type="hidden" name="nama_produk" value="<?php echo $od->nama_produk ?>" />
          <input type="hidden" name="deskripsi_produk" value="<?php echo $od->deskripsi_produk ?>" />
          <input type="hidden" name="harga_sewa" value="<?php echo $od->harga_sewa ?>" />
          <input type="hidden" name="rekening" value="<?php echo $od->rekening ?>" />
          
          <?php 

        if ($od->status == 0)
        {
          echo "<h5 class='txt-center text-danger'>Tidak Tersedia</h5>";
        }else{
          echo "<center><button type='submit' class='flex-c-m stext-107 cl0 size-301 bg1 bor13 hov-btn3 p-lr-15 trans-04 pointer'><i class='icon fas fa-cart-plus px-2'></i>Add to chart</button></center>";
        }

        ?>

        </form>       
        
      </div>
    </div>
  </div>
  
  <?php endforeach; ?>

</div>

</div>
</div>