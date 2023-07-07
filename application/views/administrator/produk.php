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
    <?php echo $this->session->flashdata('pesan') ?>

    <table id="example2" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Email</th>
                <th>Kategori</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga Sewa</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                foreach($outdoor as $od) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url(). 'assets/upload/'.$od->gambar ?>">
                        </td>
                        <td><?php echo $od->email_admin ?></td>
                        <td><?php echo $od->kode_kategori ?></td>
                        <td><?php echo $od->nama_produk ?></td>
                        <td><?php echo $od->deskripsi_produk ?></td>
                        <td><?php echo $od->harga_sewa ?></td>
                        <td><?php 
                        if($od->status == "0") {
                            echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                        }else {
                            echo "<span class='badge badge-primary'> Tersedia </span>";
                        }
                        ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/delete_produk/').$od->id_produk ?>" class="btn btn-sm btn-danger">
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

