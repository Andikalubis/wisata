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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-blue">
                <h3 class="card-title"><?= $title; ?></h3>
              </div>

              <div class="card-body">
                <a href="<?php echo base_url('kategori_wisata/tambah_kategoriW') ?>"class="btn btn-success mb-3">Tambah Data</a>

                <?php echo $this->session->flashdata('pesan') ?>

    <table id="example2" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach($kategori_wisata as $k) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $k->kode_kategori_wisata ?></td>
                <td><?php echo $k->nama_kategori_wisata ?></td>
                <td>
                    <a href="<?php echo base_url('kategori_wisata/update_kategoriW/').$k->id_kategori_wisata ?>" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="<?php echo base_url('kategori_wisata/delete_kategoriW/').$k->id_kategori_wisata ?>" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
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

