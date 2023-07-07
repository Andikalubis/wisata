<div class="bg0 m-t-150 p-b-100">
    <div class="container">
<?php foreach ($detailwisata as $dt) : ?>
      <div class="flex-w flex-sb-m p-b-52 ">
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
              <img src="<?php echo base_url('assets/img/profile/'.$dt->image) ?>
              " class="card-img-top" alt="..." style="width: 268px; height: 180px; object-fit: cover;">
              </div>
            </div>          
          </div>
            
          <div class="card-body">
            <h5 class="card-title-center pb-2">Tentang Wisata</h5>
            <p class="card-text"><?php echo $dt->deskripsi ?></p>
          </div>
           <div class="card-footer bg-primary">
            <a href="" class="txt-center text-light">
              <h5 ><i class="fas fa-paper-plane px-3"></i>Pesan Sekarang
              </h5>

            </a>
      </div>
        </div>

      </div>


      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title-center">Alamat</h5>
            <p class="card-text text-secondary"><?php echo $dt->alamat ?></p>
            <p> <a href="<?php echo $dt->maps ?>">Lihat detail lokasi</a> </p>
          <h5 class="card-title-center">Jam Operasional</h5>
            <p class="card-text text-secondary"><?php echo $dt->jam_operasional ?></p>
          <h5 class="card-title-center">Harga Tiket</h5>
            <p class="card-text text-secondary"><?php echo $dt->harga_tiket ?></p>
          <h5 class="card-title-center">Akses Jalan</h5>
            <p class="card-text text-secondary"><?php echo $dt->akses_jalan ?></p>
          <h5 class="card-title-center">Fasilitas</h5>
            <p class="card-text text-secondary"><?php echo $dt->fasilitas ?></p>
          <h5 class="card-title-center">Kontak</h5>
            <p class="card-text text-secondary"><?php echo $dt->kontak ?></p>

        </div>
      </div>
    </div>
    <?php endforeach; ?>

    <div class="flex-w flex-sb-m pt-5">
        <div class="p-t-20">
        <h3 class="ltext-103 cl5">
         SEWA PRODUK OUTDOOR
        </h3>
        </div>
      </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">

    <?php foreach ($outdoor as $od) : ?>

  <div class="col-md-3 pb-3">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/upload/'.$od->gambar) ?>" class="card-img-top" alt="..." style="width: 268px; height: 180px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title-center pb-2 txt-center"><?php echo $od->nama_produk ?></h5>
        <p class="card-text txt-center"><?php echo $od->deskripsi_produk ?></p>
        <h5 class="card-title-center pt-2 txt-center text-success"><?php echo $od->harga_sewa ?>/Hari</h5>
      </div>
      <div class="card-footer">
        
        <?php 

        if ($od->status == 0)
        {
          echo "<h5 class='txt-center text-danger'>Tidak Tersedia</h5>";
        }else{
          echo anchor('sewa/tambah_sewa'.$od->id_produk, '<button class="btn btn-primary btn-sm"><i class="icon fas fa-cart-plus px-2"></i>Add to chart</button>');
        }

        ?>

      </div>
    </div>
  </div>
  
  <?php endforeach; ?>

</div>

</div>
</div>