
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
       <div class="col-sm-6">
        <h1 class="m-0"><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <div class="card">
          <div class="card-body">

            <?php foreach ($detailwisata as $dt) : ?>

              <div class="mb-3">
                <h3><?php echo $dt->nama_wisata ?></h3>
              </div>
              <img src="<?php echo base_url('assets/img/profile/'.$dt->image) ?>
              " class="card-img-top pb-3" alt="..." style="width: 550px; height: 300px; object-fit: cover;">
              <h5 class="card-title-center pb-2">Tentang Wisata</h5>
                <p class="card-text text-secondary"><?php echo $dt->deskripsi ?></p>
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

                <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>